<?php

namespace App\Http\Controllers\Web;

use App\Exports\EncuestaExport;
use App\Http\Controllers\Controller;
use App\Models\Archivo;
use App\Models\ArchivoPregunta;
use App\Models\Cuestionario;
use App\Models\Dimension;
use App\Models\Fuente;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class ImportarArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $archivos = DB::table('archivos')
            ->join('fuentes', 'archivos.fuente_id', '=', 'fuentes.id')
            ->join('carreras_facultad', 'archivos.carrera_facultad_id', '=', 'carreras_facultad.id')
            ->join('facultades', 'carreras_facultad.facultad_id', '=', 'facultades.id')
            ->join('carreras', 'carreras_facultad.carrera_id', '=', 'carreras.id')
            ->join('localidades', 'facultades.localidad_id', '=', 'localidades.id')
            ->select('archivos.id as id', 'fuentes.nombre as fuente', 'facultades.nombre as facultad', 'carreras.nombre as carrera', 'localidades.nombre as localidad', 'archivos.nombre as nombre')
            ->where('archivos.id', '=', $id)
            ->get();

        return view('procesamiento.importar', compact('archivos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    function extraerTextoYVerificarNumero($cadena)
    {
        // Busca la posición del primer punto
        $posicionPunto = strpos($cadena, '.');

        if ($posicionPunto !== false) {
            // Extrae el texto hasta el primer punto
            $textoExtraido = substr($cadena, 0, $posicionPunto);

            // Verifica si el texto extraído es un número
            if (is_numeric($textoExtraido)) {
                return true; // Es un número
            } else {
                return false; // No es un número
            }
        } else {
            // No se encontró ningún punto en la cadena
            return false;
        }
    }
    public function extraerPreguntas(Request $request)
    {
        if ($request->hasFile('documento')) {
            $file = $request->file('documento');
            //EXTRAEMOS EL NOMBRE DEL ARCHIVO
            $nombreArchivo = trim($file->getClientOriginalName());
            $nombreArchivo = extraerTextoInicial($nombreArchivo);

            $categorias = ["AUTORIDADES", "DOCENTES", "EMPLEADORES", "ESTUDIANTES", "TITULADOS"];
            if (in_array(strtoupper($nombreArchivo), $categorias)) {
                // return "archivo con nombre correcto";

                // Procesa los datos del archivo Excel directamente
                $datos = Excel::toArray([], $file);
                if (!empty($datos) && count($datos[0]) > 0) {
                    return $datos;
                    //$transposedData = array_map(null, ...$datos[0]);

                    $preguntas = new Collection();
                    for ($i = 1; $i < count($datos[0]); $i++) {
                    }
                }
            }
        }
    }
    public function mostrarArchivoProcesado($id)
    {
        $archivo = Archivo::find($id);
        $dimensiones = Dimension::all();
        $fechaActual = Carbon::now()->format('d/m/Y');
        $horaActual = Carbon::now()->format('H:i:s');
        if (isset($archivo)) {
             return view('procesamiento.plantilla', compact('archivo', 'dimensiones', 'fechaActual', 'horaActual'));
            //return view('procesamiento.plantillaexcelexport',compact('archivo','dimensiones','fechaActual','horaActual'));
        } else {
            return "No existe el archivo";
        }
    }
    public function exportarExcel($id)
    {
        $archivo = Archivo::find($id);
        $dimensiones = Dimension::all();
        $fechaActual = Carbon::now()->format('d/m/Y');
        $fechaSinBarras = str_replace('/', '', $fechaActual);

        $horaActual = Carbon::now()->format('H:i:s');
        if (isset($archivo)) {
            return Excel::download(new EncuestaExport($archivo,$dimensiones,$fechaActual,$horaActual), 'archivo_salida_'.$archivo->fuente->nombre.'_'.$fechaSinBarras.'.xlsx');
            // return view('procesamiento.plantilla', compact('archivo','dimensiones','fechaActual','horaActual'));
            // return view('procesamiento.plantillaexcelexport', compact('archivo', 'dimensiones', 'fechaActual', 'horaActual'));
        } else {
            return "No existe el archivo";
        }
    }
    //**************************METODO PARA PROCESAR */
    public function procesarArchivo(Request $request)
    {
        function extraerTexto($nombreArchivo)
        {
            // Obtén el nombre del archivo sin la extensión
            $nombreSinExtension = pathinfo($nombreArchivo, PATHINFO_FILENAME);

            // Encuentra el primer espacio en el nombre
            $posicionEspacio = strpos($nombreSinExtension, ' ');

            if ($posicionEspacio !== false) {
                // Extrae el texto antes del primer espacio
                $textoInicial = substr($nombreSinExtension, 0, $posicionEspacio);
                return $textoInicial;
            }

            // Si no hay espacio, devuelve el nombre completo sin cambios
            return $nombreSinExtension;
        }
        function cantidadEncuestados($filas)
        {
            $c = 0;
            for ($i = 0; $i < count($filas); $i++) {
                if ($filas[$i] != null) {
                    $c++;
                }
            }
            return $c - 1;
        }
        function extraerNumeroTextoProcesamiento($cadena)
        {
            // Busca la posición del primer punto
            $posicionPunto = strpos($cadena, '.');

            if ($posicionPunto !== false) {
                // Extrae el texto hasta el primer punto
                $textoExtraido = substr($cadena, 0, $posicionPunto + 1);

                // Verifica si el texto extraído es un número
                if (is_numeric($textoExtraido)) {
                    return $textoExtraido; // Es un número
                } else {
                    return ""; // No es un número
                }
            } else {
                // No se encontró ningún punto en la cadena
                return "";
            }
        }
        function siguienteEsNumero($cadena, $pos, $numero)
        {
            $c = substr($cadena, $pos);
            $c = trim($c);

            for ($j = 0; $j < strlen($numero); $j++) {
                if ($c[$j] != $numero[$j]) {
                    return false;
                }
            }

            return true;
            // $longitud = strlen($cadena);
            // $esNumero = false;

            // for ($i = 0; $i < $longitud; $i++) {
            //     $caracter = $cadena[$i];

            //     if ($i === 0) {
            //         // Verificamos si el primer carácter es un número
            //         if (ctype_digit($caracter)) {
            //             $esNumero = true;
            //         } else {
            //             return false; // No es un número, retornamos false
            //         }
            //     } elseif ($caracter === '.') {
            //         // Hemos llegado al punto, si es un número, retornamos true
            //         return $esNumero;
            //     } elseif (!ctype_digit($caracter)) {
            //         // Si no es un número, retornamos false
            //         return false;
            //     }
            // }
        }
        function separarCadenasEspecificasProcesamiento($cadena, $numeroEspecifico)
        {
            $valor = "";
            $longitud = strlen($cadena);
            $coma = false;
            $elementos = [];

            for ($i = 0; $i < $longitud; $i++) {
                if ($cadena[$i] == ',') {
                    // Verificamos si el número próximo es igual al número que le pasamos
                    $coma = true;
                } else {
                    if ($coma) {

                        if (siguienteEsNumero($cadena, $i, $numeroEspecifico)) {
                            $elementos[] = trim($valor);
                            $valor = ""; // Reiniciamos el valor
                        } else {
                            $valor = $valor . $cadena[$i - 1] . $cadena[$i];
                        }
                        $coma = false;
                    } else {
                        $valor = $valor . $cadena[$i]; // Concatenamos el carácter
                    }
                }
            }

            $elementos[] = trim($valor);

            return $elementos;
        }
        function extraerTextoYVerificarNumeroProcesamiento($cadena)
        {
            // Busca la posición del primer punto
            $posicionPunto = strpos($cadena, '.');

            if ($posicionPunto !== false) {
                // Extrae el texto hasta el primer punto
                $textoExtraido = substr($cadena, 0, $posicionPunto);

                // Verifica si el texto extraído es un número
                if (is_numeric($textoExtraido)) {
                    return true; // Es un número
                } else {
                    return false; // No es un número
                }
            } else {
                // No se encontró ningún punto en la cadena
                return false;
            }
        }
        function contarPreguntas($array)
        {
            $c = 0;
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i] == null) {
                    return $c - 1;
                }
                $c++;
            }
            return $c - 1;
        }
        // return $request->carrera_facultad_id;
        if ($request->hasFile('documento')) {
            $file = $request->file('documento');
            //EXTRAEMOS EL NOMBRE DEL ARCHIVO
            $nombreArchivo1 = trim($file->getClientOriginalName());
            $nombreArchivo = extraerTexto($nombreArchivo1);

            // $categorias = ["AUTORIDADES", "DOCENTES", "EMPLEADORES", "ESTUDIANTES", "TITULADOS"];
            $fuente = Fuente::all()->where('nombre', strtoupper($nombreArchivo))->first();

            // return $fuente;
            if (isset($fuente)) {
                $datos = Excel::toArray([], $file);

                $transposedData = array_map(null, ...$datos[0]); //para que se agrupen de preguntas y sus respuestas
                $cantidadPreguntas = contarPreguntas($datos[0][0]);
                if (!empty($datos) && count($datos[0]) > 1 && $cantidadPreguntas == count($fuente->preguntas)) {
                    //crear las preguntas archivo segun la categoría
                    $encuestados = cantidadEncuestados($datos[0]);

                    $preguntasFuente = $fuente->preguntas;
                    // return $preguntasFuente[0];
                    //  return $encuestados;
                    $encuesta = [
                        'poblacion' => $encuestados,
                        'preguntas' => (count($transposedData) - 1),
                        'fuente' => $fuente->id,
                        'nombreArchivo' => $nombreArchivo1,
                        'resultado' => null
                    ];
                    $resultado = new Collection();
                    // return $transposedData;
                    for ($i = 1; $i <= $cantidadPreguntas; $i++) { //verificar que el numero de respuestas sea igual para todos
                        $pregunta = trim($transposedData[$i][0]);
                        $id_pregunta = $preguntasFuente[$i - 1]['id'];
                        $respuestas = explode("|", $preguntasFuente[$i - 1]['respuesta']);
                        $respuestaColeccion = new Collection();
                        //llenar respuestas a colleccion
                        for ($j = 0; $j < count($respuestas); $j++) {
                            $respuestaColeccion->push([
                                'valor' => $respuestas[$j],
                                'cantidad' => 0
                            ]);
                        }

                        $tipo = explode(",", $preguntasFuente[$i - 1]['tipo']); //U,M,C

                        $muestra = 0;
                        if (in_array("U", $tipo)) { //SI LA PREGUNTA ES UNISELECCION
                            if (in_array("C", $tipo)) { //ES UNISELECCION CON CONDICIONAL, SE DEBE CONTROLAR LAS RESPUESTAS
                                for ($k = 1; $k <= $encuestados; $k++) {
                                    $respuestaPregunta = trim($transposedData[$i][$k]); //EXTRAE LA RESPUESTA DEL ARRAY DEL EXCEL TRANSPUESTO
                                    $respuestaPregunta = strtoupper(str_replace(' ', '', $respuestaPregunta));
                                    if ($respuestaPregunta != null) {
                                        $muestra++;
                                        $respuestaColeccion = $respuestaColeccion->map(function ($item) use ($respuestaPregunta) {
                                            $valor_sin_espacios = strtoupper(str_replace(' ', '', $item['valor']));
                                            if (trim($valor_sin_espacios) == trim($respuestaPregunta)) {
                                                $item['cantidad'] = $item['cantidad'] + 1;
                                            }
                                            return $item;
                                        });
                                    }
                                }
                            } else { //ES SOLO UNISELECCION
                                //    if ($i == 29) {

                                for ($k = 1; $k <= $encuestados; $k++) {
                                    $respuestaPregunta = trim($transposedData[$i][$k]); //EXTRAE LA RESPUESTA DEL ARRAY DEL EXCEL TRANSPUESTO  

                                    // Eliminar todos los espacios de $respuestaPregunta
                                    $respuestaPregunta = strtoupper(str_replace(' ', '', $respuestaPregunta));

                                    $muestra++;

                                    $respuestaColeccion = $respuestaColeccion->map(function ($item) use ($respuestaPregunta) {
                                        // Eliminar todos los espacios de $item['valor']
                                        $valor_sin_espacios = strtoupper(str_replace(' ', '', $item['valor']));
                                        if (trim($valor_sin_espacios) == trim($respuestaPregunta)) {
                                            $item['cantidad'] = $item['cantidad'] + 1;
                                        }
                                        return $item;
                                    });
                                }
                                if ($muestra != $encuestados) {
                                    return "Está mal";
                                }
                                // }
                            }
                        } else {
                            //EN EL OTRO CASO SERÍA MULTISELECCION

                            $numeroPregunta = extraerNumeroTextoProcesamiento($pregunta);

                            for ($k = 1; $k <= $encuestados; $k++) {
                                // $verificaTexto = extraerTextoYVerificarNumero($transposedData[$i][$k]);
                                // $respuestaPregunta = explode("|", trim($transposedData[$i][$k])); //EXTRAE LA RESPUESTA DEL ARRAY DEL EXCEL TRANSPUESTO
                                $respuestaPregunta = trim($transposedData[$i][$k]);
                                if ($respuestaPregunta != null) {
                                    $contieneNumero = extraerTextoYVerificarNumeroProcesamiento($transposedData[$i][$k]);
                                    if ($contieneNumero) { //SI LA RESPUESTA CONTIENE NUMERO SEPARAR POR NUMERO
                                        $respuestaPregunta = separarCadenasEspecificasProcesamiento($transposedData[$i][$k], $numeroPregunta);
                                        $muestra++;
                                        foreach ($respuestaPregunta as $rp) {
                                            $rp = trim($rp);
                                            $rp = strtoupper(str_replace(' ', '', $rp));
                                            // return $respuestaColeccion;
                                            $respuestaColeccion = $respuestaColeccion->map(function ($item) use ($rp) {
                                                $valor_sin_espacios = strtoupper(str_replace(' ', '', $item['valor']));
                                                if (trim($valor_sin_espacios) == trim($rp)) {
                                                    $item['cantidad'] = $item['cantidad'] + 1;
                                                }
                                                return $item;
                                            });
                                            $respuestaPregunta;
                                        }
                                    } else { //NO SEPARAR POR NUMERO
                                        // if($i==44){
                                        //     return $respuestaColeccion;
                                        // }
                                        //EXTRAE LA RESPUESTA DEL ARRAY DEL EXCEL TRANSPUESTO  

                                        $respuestaPregunta = strtoupper(str_replace(' ', '', $respuestaPregunta));
                                        $respuestaPregunta = \explode(",", $respuestaPregunta);


                                        $muestra++;
                                        foreach ($respuestaPregunta as $rp) {
                                            $respuestaColeccion = $respuestaColeccion->map(function ($item) use ($rp) {
                                                $valor_sin_espacios = strtoupper(str_replace(' ', '', $item['valor']));
                                                if (trim($valor_sin_espacios) == trim($rp)) {
                                                    $item['cantidad'] = $item['cantidad'] + 1;
                                                }
                                                return $item;
                                            });
                                        }
                                    }
                                }
                            }
                        }
                        $resultado->push([
                            'id' => $id_pregunta,
                            'pregunta' => $pregunta,
                            'tipo' => $tipo,
                            'muestra' => $muestra,
                            'respuesta' => $respuestaColeccion
                        ]);
                        //insertar datos a la base de datos

                    }
                    $encuesta['resultado'] = $resultado;
                    // return response()->json(['data' => $encuesta, 'succes' => true]);
                    $archivoPrueba = Archivo::all()->where('fuente_id', $encuesta['fuente'])->where('carrera_facultad_id', $request->carrera_facultad_id)->first();

                    if ($archivoPrueba == null) {
                        // return response()->json(['data' => $encuesta, 'succes' => true]);
                        $a = Archivo::create([
                            'nombre' => $encuesta['nombreArchivo'],
                            'cantidad_encuestados' => $encuesta['poblacion'],
                            'fuente_id' => $encuesta['fuente'],
                            'carrera_facultad_id' => $request['carrera_facultad_id'],
                        ]);
                        foreach ($resultado as $r) {
                            foreach ($r['respuesta'] as $respuesta) {
                                ArchivoPregunta::create([
                                    'respuesta' => $respuesta['valor'],
                                    'muestra' => $r['muestra'],
                                    'porcentaje' => ($respuesta['cantidad'] > 0) ? round((($respuesta['cantidad'] * 100) / $r['muestra']), 2) : 0,
                                    'cantidad' => ($respuesta['cantidad'] == null) ? 0 : $respuesta['cantidad'],
                                    'archivo_id' => $a->id,
                                    'pregunta_id' => $r['id']
                                ]);
                            }
                        }
                        // return redirect()->route('mostrar.archivo.procesado', ['id' => $a->id]);
                        return response()->json(['data' => $a, 'succes' => true]);
                    } else {
                        // return response()->json(['data' => $encuesta, 'succes' => true]);
                        $a = Archivo::find($archivoPrueba->id);
                        $a->nombre = $encuesta['nombreArchivo'];
                        $a->cantidad_encuestados = $encuesta['poblacion'];
                        $a->save();

                        foreach ($resultado as $r) {
                            foreach ($r['respuesta'] as $respuesta) {
                                $archivo_pregunta = $a->archivoPreguntas->where('pregunta_id', $r['id'])->where('respuesta', $respuesta['valor'])->first();
                                $archivo_pregunta->cantidad = $respuesta['cantidad'];
                                $archivo_pregunta->porcentaje = ($respuesta['cantidad'] > 0) ? round((($respuesta['cantidad'] * 100) / $r['muestra']), 2) : 0;
                                $archivo_pregunta->save();
                            }
                        }
                        // return redirect()->route('mostrar.archivo.procesado', ['id' => $a->id]);
                        return response()->json(['data' => $a, 'succes' => true]);
                    }
                } else {
                    // echo "los datos están vacios";
                    return response()->json(['error' => ['message' => 'Error: los datos están vacios']], 422);
                }
            } else {
                // return "archivo con nombre incorrecto";
                return response()->json(['error' => ['message' => 'Error: archivo con nombre incorrecto']], 422);
            }
        } else {
            // return "no hay archivo";
            return response()->json(['error' => ['message' => 'Error: Archivo no encontrado']], 404);
        }
    }
    public function importar(Request $request)
    {
        function separarCadenasEspecificas($cadena, $numeroEspecifico)
        {
            // Construye el patrón de expresión regular con el número específico
            $patron = '/(' . preg_quote($numeroEspecifico) . '[^,]+)/';
            // Encuentra todas las coincidencias según el patrón
            preg_match_all($patron, $cadena, $coincidencias);

            // Obtiene los elementos resultantes
            $elementos = $coincidencias[1];
            $elementos = array_map('trim', $elementos);

            return $elementos;
        }
        function extraerNumeroTexto($cadena)
        {
            // Busca la posición del primer punto
            $posicionPunto = strpos($cadena, '.');

            if ($posicionPunto !== false) {
                // Extrae el texto hasta el primer punto
                $textoExtraido = substr($cadena, 0, $posicionPunto + 1);

                // Verifica si el texto extraído es un número
                if (is_numeric($textoExtraido)) {
                    return $textoExtraido; // Es un número
                } else {
                    return ""; // No es un número
                }
            } else {
                // No se encontró ningún punto en la cadena
                return "";
            }
        }
        function extraerTextoYVerificarNumero($cadena)
        {
            // Busca la posición del primer punto
            $posicionPunto = strpos($cadena, '.');

            if ($posicionPunto !== false) {
                // Extrae el texto hasta el primer punto
                $textoExtraido = substr($cadena, 0, $posicionPunto);

                // Verifica si el texto extraído es un número
                if (is_numeric($textoExtraido)) {
                    return true; // Es un número
                } else {
                    return false; // No es un número
                }
            } else {
                // No se encontró ningún punto en la cadena
                return false;
            }
        }
        function extraerTextoInicial($nombreArchivo)
        {
            // Obtén el nombre del archivo sin la extensión
            $nombreSinExtension = pathinfo($nombreArchivo, PATHINFO_FILENAME);

            // Encuentra el primer espacio en el nombre
            $posicionEspacio = strpos($nombreSinExtension, ' ');

            if ($posicionEspacio !== false) {
                // Extrae el texto antes del primer espacio
                $textoInicial = substr($nombreSinExtension, 0, $posicionEspacio);
                return $textoInicial;
            }

            // Si no hay espacio, devuelve el nombre completo sin cambios
            return $nombreSinExtension;
        }
        function customSort(Collection $data): Collection
        {
            // Separate the data into three collections: SI, NO, and others
            $si = collect();
            $no = collect();
            $others = collect();

            foreach ($data as $item) {
                switch ($item['id']) {
                    case 'SI':
                        $si->push($item);
                        break;
                    case 'NO':
                        $no->push($item);
                        break;
                    default:
                        $others->push($item);
                }
            }

            // Sort thethe SI and NO collections by cantidad in ascending order
            $sortedSi = $si->sortBy('cantidad');
            $sortedNo = $no->sortBy('cantidad');

            // Combine the sorted collections
            $sortedData = $sortedSi->concat($sortedNo)->concat($others);

            return $sortedData;
        }

        if ($request->hasFile('documento')) {
            $file = $request->file('documento');
            //EXTRAEMOS EL NOMBRE DEL ARCHIVO
            $nombreArchivo = trim($file->getClientOriginalName());
            $nombreArchivo = extraerTextoInicial($nombreArchivo);

            $categorias = ["AUTORIDADES", "DOCENTES", "EMPLEADORES", "ESTUDIANTES", "TITULADOS"];
            if (in_array(strtoupper($nombreArchivo), $categorias)) {
                // return "archivo con nombre correcto";

                // Procesa los datos del archivo Excel directamente
                $datos = Excel::toArray([], $file);

                if (!empty($datos) && count($datos[0]) > 1) {

                    $transposedData = array_map(null, ...$datos[0]);
                    $encuesta = [
                        'poblacion' => (count($datos[0]) - 1),
                        'preguntas' => (count($transposedData) - 1),
                        'resultado' => null
                    ];
                    $preguntas_respuestas = new Collection();
                    for ($i = 1; $i < count($transposedData); $i++) {

                        $pregunta = $transposedData[$i][0];
                        if (isset($pregunta)) {
                            $respuestas =  new Collection();

                            $prs = [
                                'pregunta' => $pregunta,
                                'tipo' => "",
                                'respondidos' => 0,
                                'nulos' => 0,
                                'respuesta' => $respuestas,
                            ];
                            $numeroPregunta = extraerNumeroTexto($pregunta); //extrae el numero de la pregunta
                            $multiseleccion = false;
                            $uniseleccion = false;
                            for ($j = 1; $j < count($transposedData[0]); $j++) {
                                $elemento = $transposedData[$i][$j];
                                if ($elemento !== null) {
                                    $b = extraerTextoYVerificarNumero($elemento);
                                    if ($b && !$multiseleccion && !$uniseleccion) {
                                        //es multiseleccion
                                        $prs['tipo'] = "M";
                                        $multiseleccion = true;
                                    }
                                    if (!$b && !$multiseleccion && !$uniseleccion) {
                                        $prs['tipo'] = "U";
                                        $uniseleccion = true;
                                    }
                                    if ($multiseleccion && !$uniseleccion) {
                                        //es multiseleccion
                                        $elementos = separarCadenasEspecificas($elemento, $numeroPregunta);
                                        foreach ($elementos as $element) {
                                            $elementoExistente = $respuestas->firstWhere('id', $element);
                                            if (!$elementoExistente) { //verificamos si existe ya el elemento
                                                $respuestas->push(["id" => $element, "cantidad" => 1]);
                                            } else {
                                                $elementoExistente['cantidad']++;
                                                $respuestas = $respuestas->map(function ($item) use ($element, $elementoExistente) {
                                                    if ($item['id'] === $element) {
                                                        $item['cantidad'] = $elementoExistente['cantidad'];
                                                    }
                                                    return $item;
                                                });
                                            }
                                        }
                                    }
                                    if ($uniseleccion && !$multiseleccion) {
                                        //es uniseleccion
                                        $elementoExistente = $respuestas->firstWhere('id', $elemento);
                                        if (!$elementoExistente) { //verificamos si existe ya el elemento
                                            $respuestas->push(["id" => $elemento, "cantidad" => 1]);
                                        } else {
                                            $elementoExistente['cantidad']++;
                                            $respuestas = $respuestas->map(function ($item) use ($elemento, $elementoExistente) {
                                                if ($item['id'] === $elemento) {
                                                    $item['cantidad'] = $elementoExistente['cantidad'];
                                                }
                                                return $item;
                                            });
                                        }
                                    }

                                    $prs['respuesta'] = customSort($respuestas); //$respuestas->sortByDesc('cantidad')->values();;
                                    $prs['respondidos'] = $prs['respondidos'] + 1;
                                } else {
                                    $prs['nulos'] = $prs['nulos'] + 1;
                                }
                            }
                            $preguntas_respuestas->push($prs);
                        }
                    }

                    $encuesta['resultado'] = $preguntas_respuestas;
                    return view('procesamiento.archivoprocesado', compact('encuesta', 'nombreArchivo'));
                    // return "tienen la misma cantidad de preguntas";
                    // } else {
                    //     return "No tiene la misma cantidad de pregunta";
                    // }
                    //  return $datos; // Devuelve los datos importados
                } else {
                    echo "los datos están vacios";
                }
            } else {
                return "archivo con nombre incorrecto";
            }
        } else {
            return "no hay archivo";
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function preguntas()
    {
        $fuente = Fuente::find(1); //A
        // $fuente=Fuente::find(2);//D
        // $fuente=Fuente::find(3);//Em
        // $fuente=Fuente::find(4);//E
        // $fuente=Fuente::find(5);//T
        return view('procesamiento.preguntas', compact('fuente'));
    }

    public function pdf(Request $request)
    {
        $encuesta = $this->procesarDatos($request);

        //dd($encuesta);

        $pdf = Pdf::loadView(
            'procesamiento.pdf',
            [
                'encuesta'          => $encuesta
            ]
        );

        $fecha_y_hora = Carbon::now();
        $fecha_y_hora = $fecha_y_hora->format('Y-m-d_His');

        return $pdf->stream('resultados_' . $fecha_y_hora . '.pdf');
    }

    public function procesarDatos(Request $request)
    {
        function separarCadenas($cadena, $numeroEspecifico)
        {
            // Construye el patrón de expresión regular con el número específico
            $patron = '/(' . preg_quote($numeroEspecifico) . '[^,]+)/';
            // Encuentra todas las coincidencias según el patrón
            preg_match_all($patron, $cadena, $coincidencias);

            // Obtiene los elementos resultantes
            $elementos = $coincidencias[1];
            $elementos = array_map('trim', $elementos);

            return $elementos;
        }
        function extraerNumero($cadena)
        {
            // Busca la posición del primer punto
            $posicionPunto = strpos($cadena, '.');

            if ($posicionPunto !== false) {
                // Extrae el texto hasta el primer punto
                $textoExtraido = substr($cadena, 0, $posicionPunto + 1);

                // Verifica si el texto extraído es un número
                if (is_numeric($textoExtraido)) {
                    return $textoExtraido; // Es un número
                } else {
                    return ""; // No es un número
                }
            } else {
                // No se encontró ningún punto en la cadena
                return "";
            }
        }
        function extraerTextoVerificandoNumero($cadena)
        {
            // Busca la posición del primer punto
            $posicionPunto = strpos($cadena, '.');

            if ($posicionPunto !== false) {
                // Extrae el texto hasta el primer punto
                $textoExtraido = substr($cadena, 0, $posicionPunto);

                // Verifica si el texto extraído es un número
                if (is_numeric($textoExtraido)) {
                    return true; // Es un número
                } else {
                    return false; // No es un número
                }
            } else {
                // No se encontró ningún punto en la cadena
                return false;
            }
        }
        function extraerTextoDeInicio($nombreArchivo)
        {
            // Obtén el nombre del archivo sin la extensión
            $nombreSinExtension = pathinfo($nombreArchivo, PATHINFO_FILENAME);

            // Encuentra el primer espacio en el nombre
            $posicionEspacio = strpos($nombreSinExtension, ' ');

            if ($posicionEspacio !== false) {
                // Extrae el texto antes del primer espacio
                $textoInicial = substr($nombreSinExtension, 0, $posicionEspacio);
                return $textoInicial;
            }

            // Si no hay espacio, devuelve el nombre completo sin cambios
            return $nombreSinExtension;
        }
        function ordenPersonalizado(Collection $data): Collection
        {
            // Separate the data into three collections: SI, NO, and others
            $si = collect();
            $no = collect();
            $others = collect();

            foreach ($data as $item) {
                switch ($item['id']) {
                    case 'SI':
                        $si->push($item);
                        break;
                    case 'NO':
                        $no->push($item);
                        break;
                    default:
                        $others->push($item);
                }
            }

            // Sort thethe SI and NO collections by cantidad in ascending order
            $sortedSi = $si->sortBy('cantidad');
            $sortedNo = $no->sortBy('cantidad');

            // Combine the sorted collections
            $sortedData = $sortedSi->concat($sortedNo)->concat($others);

            return $sortedData;
        }

        if ($request->hasFile('documento')) {
            $file = $request->file('documento');
            //EXTRAEMOS EL NOMBRE DEL ARCHIVO
            $nombreArchivo = trim($file->getClientOriginalName());
            $nombreArchivo = extraerTextoDeInicio($nombreArchivo);

            $categorias = ["AUTORIDADES", "DOCENTES", "EMPLEADORES", "ESTUDIANTES", "TITULADOS"];
            if (in_array(strtoupper($nombreArchivo), $categorias)) {
                // return "archivo con nombre correcto";

                // Procesa los datos del archivo Excel directamente
                $datos = Excel::toArray([], $file);

                if (!empty($datos) && count($datos[0]) > 1) {

                    $transposedData = array_map(null, ...$datos[0]);
                    $encuesta = [
                        'poblacion' => (count($datos[0]) - 1),
                        'preguntas' => (count($transposedData) - 1),
                        'resultado' => null
                    ];
                    $preguntas_respuestas = new Collection();
                    for ($i = 1; $i < count($transposedData); $i++) {

                        $pregunta = $transposedData[$i][0];
                        if (isset($pregunta)) {
                            $respuestas =  new Collection();

                            $prs = [
                                'pregunta' => $pregunta,
                                'tipo' => "",
                                'respondidos' => 0,
                                'nulos' => 0,
                                'respuesta' => $respuestas,
                            ];
                            $numeroPregunta = extraerNumero($pregunta); //extrae el numero de la pregunta
                            $multiseleccion = false;
                            $uniseleccion = false;
                            for ($j = 1; $j < count($transposedData[0]); $j++) {
                                $elemento = $transposedData[$i][$j];
                                if ($elemento !== null) {
                                    $b = extraerTextoVerificandoNumero($elemento);
                                    if ($b && !$multiseleccion && !$uniseleccion) {
                                        //es multiseleccion
                                        $prs['tipo'] = "M";
                                        $multiseleccion = true;
                                    }
                                    if (!$b && !$multiseleccion && !$uniseleccion) {
                                        $prs['tipo'] = "U";
                                        $uniseleccion = true;
                                    }
                                    if ($multiseleccion && !$uniseleccion) {
                                        //es multiseleccion
                                        $elementos = separarCadenas($elemento, $numeroPregunta);
                                        foreach ($elementos as $element) {
                                            $elementoExistente = $respuestas->firstWhere('id', $element);
                                            if (!$elementoExistente) { //verificamos si existe ya el elemento
                                                $respuestas->push(["id" => $element, "cantidad" => 1]);
                                            } else {
                                                $elementoExistente['cantidad']++;
                                                $respuestas = $respuestas->map(function ($item) use ($element, $elementoExistente) {
                                                    if ($item['id'] === $element) {
                                                        $item['cantidad'] = $elementoExistente['cantidad'];
                                                    }
                                                    return $item;
                                                });
                                            }
                                        }
                                    }
                                    if ($uniseleccion && !$multiseleccion) {
                                        //es uniseleccion
                                        $elementoExistente = $respuestas->firstWhere('id', $elemento);
                                        if (!$elementoExistente) { //verificamos si existe ya el elemento
                                            $respuestas->push(["id" => $elemento, "cantidad" => 1]);
                                        } else {
                                            $elementoExistente['cantidad']++;
                                            $respuestas = $respuestas->map(function ($item) use ($elemento, $elementoExistente) {
                                                if ($item['id'] === $elemento) {
                                                    $item['cantidad'] = $elementoExistente['cantidad'];
                                                }
                                                return $item;
                                            });
                                        }
                                    }

                                    $prs['respuesta'] = ordenPersonalizado($respuestas); //$respuestas->sortByDesc('cantidad')->values();;
                                    $prs['respondidos'] = $prs['respondidos'] + 1;
                                } else {
                                    $prs['nulos'] = $prs['nulos'] + 1;
                                }
                            }
                            $preguntas_respuestas->push($prs);
                        }
                    }

                    $encuesta['resultado'] = $preguntas_respuestas;
                    //$encuesta['nombre_archivo'] = $nombreArchivo;
                    //dd($encuesta);
                    return $encuesta;
                    // return "tienen la misma cantidad de preguntas";
                    // } else {
                    //     return "No tiene la misma cantidad de pregunta";
                    // }
                    //  return $datos; // Devuelve los datos importados
                } else {
                    echo "los datos están vacios";
                }
            } else {
                return "archivo con nombre incorrecto";
            }
        } else {
            return "no hay archivo";
        }
    }
}
