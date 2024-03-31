<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cuestionario;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ImportarArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('procesamiento.importar');
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
}
