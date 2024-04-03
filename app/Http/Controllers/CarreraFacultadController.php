<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Carrera;
use App\Models\CarreraFacultad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarreraFacultadController extends Controller
{
    public function index()
    {
        return view('procesamiento.index');
    }

    public function getCarreras(Request $request)
    {
        if($request->keyword != ""){
            //$data = Carrera::where('nombre', 'LIKE','%'.$request->keyword.'%')->get();

            $data = DB::table('carreras_facultad')
                        ->join('facultades', 'carreras_facultad.facultad_id', '=', 'facultades.id')
                        ->join('carreras', 'carreras_facultad.carrera_id', '=', 'carreras.id')
                        ->join('localidades', 'facultades.localidad_id', '=', 'localidades.id')
                        ->select('carreras_facultad.id as id','facultades.nombre as facultad', 'carreras.nombre as carrera', 'localidades.nombre as localidad')
                        ->where('carreras.nombre', 'LIKE','%'.$request->keyword.'%')
                        ->orWhere('localidades.nombre', 'LIKE','%'.$request->keyword.'%')
                        ->orWhere('facultades.nombre', 'LIKE','%'.$request->keyword.'%')
                        ->get();

            return response()->json($data);
        }
    }

    public function mostrarDatosCarrera(Request $request){

        //Aqui se debería procesar y guardar el archivo, junto con su nombre para luego ver esos resultados

        $archivo = new Archivo();

        $archivo->nombre = $request->input('carrera');
        $archivo->carrera_facultad_id = $request->input('id');
      

        $archivo->save();

        return response()->json($archivo);
    }

    public function resultados($id){

        $archivos = DB::table('archivos')
                        ->join('fuentes', 'archivos.fuente_id', '=', 'fuentes.id')
                        ->join('carreras_facultad', 'archivos.carrera_facultad_id', '=', 'carreras_facultad.id')
                        ->join('facultades', 'carreras_facultad.facultad_id', '=', 'facultades.id')
                        ->join('carreras', 'carreras_facultad.carrera_id', '=', 'carreras.id')
                        ->join('localidades', 'facultades.localidad_id', '=', 'localidades.id')
                        ->select('archivos.id as id', 'fuentes.nombre as categoria', 'facultades.nombre as facultad', 'carreras.nombre as carrera', 'localidades.nombre as localidad', 'archivos.nombre as nombre')
                        ->where('archivos.id', '=',$id)
                        ->get();

        return view('procesamiento.resultados', compact('archivos'));

    }


}
