<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarreraFacultadController extends Controller
{
    public function buscador(Request $request)
    {
        // return $request->keyword;
        if($request->keyword != ""){
            //$data = Carrera::where('nombre', 'LIKE','%'.$request->keyword.'%')->get();
            $frase=strtoupper(str_replace(' ', '', $request->keyword));
            
            $data = DB::table('carreras_facultad')
                        ->join('facultades', 'carreras_facultad.facultad_id', '=', 'facultades.id')
                        ->join('carreras', 'carreras_facultad.carrera_id', '=', 'carreras.id')
                        ->join('localidades', 'facultades.localidad_id', '=', 'localidades.id')
                        ->select('carreras_facultad.id as id','facultades.nombre as facultad', 'carreras.nombre as carrera', 'localidades.nombre as localidad')
                        ->where('carreras.nombre_mayuscula', 'LIKE','%'.$request->keyword.'%')
                        ->orWhere('localidades.nombre_mayuscula', 'LIKE','%'.$request->keyword.'%')
                        ->orWhere('facultades.nombre_mayuscula', 'LIKE','%'.$request->keyword.'%')
                        ->get();

            return response()->json(['data'=>$data]);
        }
    }
}
