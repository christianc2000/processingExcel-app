<?php

namespace Database\Seeders;

use App\Models\Dimension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dimensions = [
            [//1
                'nombre' => '1: ESTATUTO ORGÁNICO DE LA U.A.G.R.M.'
            ],
            [//2
                'nombre' => '4: PLAN DE DESARROLLO ESTRATÉGICO DE LA CARRERA:'
            ],
            [//3
                'nombre' => '5: REGLAMENTOS GENERALES Y ESPECÍFICOS'
            ],
            [//4
                'nombre' => '6: MANUALES DE ORGANIZACIÓN Y FUNCIONES'
            ],
            [//5
                'nombre' => '9: ANÁLISIS DE LA SITUACIÓN ACTUAL DE LA CARRERA'
            ],
            [//6
                'nombre' => '11: PROPÓSITO DE LA CARRERA: LA MISIÓN'
            ],
            [//7
                'nombre' => '12: PERSPECTIVA INSTITUCIONAL: LA VISIÓN'
            ],
            [//8
                'nombre' => '13: OBJETIVOS DEL PROGRAMA ACADÉMICO O CARRERA.'
            ],
            [//9
                'nombre' => '16: FUNDAMENTOS SOCIOCULTURALES DEL PROYECTO CURRICULAR'
            ],
            [//10
                'nombre' => '17: OBJETIVO CURRICULAR COMPETENCIAS Y CONOCIMIENTOS'
            ],
            [//11
                'nombre' => '18: PERFIL PROFESIONAL'
            ],
            [//12
                'nombre'=>'19: OBJETIVOS DEL PLAN DE ESTUDIO'
            ],
            [//13
                'nombre'=>'20: ORGANIZACIÓN Y ESTRUCTURA DEL PLAN DE ESTUDIO'
            ],
            [//14
                'nombre'=>'21: DISEÑO DE ASIGNATURAS. PROGRAMAS DEL PLAN DE ESTUDIOS'
            ],
            [//15
                'nombre'=>'22: ORGANIZACIÓN DE ASIGNATURA Y DISTRIBUCIÓN DE HORAS ACADÉMICAS'
            ],
            [//16
                'nombre'=>'23: CUMPLIMIENTO DEL PLAN DE ESTUDIOS'
            ],
            [//17
                'nombre'=>'24: MÉTODOS DE ENSEÑANZA APRENDIZAJE'
            ],
            [//18
                'nombre'=>'25: CONTENIDO CURRICULAR'
            ],
            [//19
                'nombre'=>'26: ESTRUCTURA ORGANIZACIONAL'
            ],
            [//20
                'nombre'=>'27: SELECCIÓN, CALIFICACIÓN, EXPERIENCIA Y EVALUACIÓN DE LOS DIRECTIVOS'
            ],
            [//21
                'nombre'=>'28: CALIFICACIÓN, EXPERIENCIA Y CANTIDAD DEL PERSONAL DE APOYO ADMINISTRATIVO'
            ],
            [//22
                'nombre'=>'29: SISTEMA DE INFORMACIÓN Y COMUNICACIÓN'
            ],
            [//23
                'nombre'=>'30: SISTEMA DE TOMA DE DECISIONES'
            ],
            [//24
                'nombre'=>'31: PROCESOS DE EVALUACIÓN'
            ],
            [//25
                'nombre'=>'32: CRITERIOS DE SELECCIÓN, EVALUACIÓN Y PROMOCIÓN DOCENTE'
            ],
            [//26
                'nombre'=>'35: DESEMPEÑO DOCENTE EN LA INVESTIGACIÓN Y LA INTERACCIÓN SOCIAL'
            ],
            //******************************OTRO CUESTIONARIO******************************************* */
            [//27
                'nombre'=>'DIMENSIÓN 1: CONTEXTO INSTITUCIONAL'
            ]
        ];
        foreach ($dimensions as $dimension) {
            Dimension::create($dimension);
        }
    }
}
