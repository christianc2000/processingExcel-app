<?php

namespace Database\Seeders;

use App\Models\RespuestaDefinida;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RespuestaDefinidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $respuesta_definidas = [
            [ //1
                'respuesta' => 'SI|NO'
            ],
            [ //2
                'respuesta' => 'SI|NO|NO SABE'
            ],
            [ //3
                'respuesta' => 'CATALOGO|BOLETINES|PAGINAS WEB DE LA UNIVERSIDAD|OTROS MEDIOS'
            ],
            [ //4
                'respuesta' => 'ACTUALIZADO|OBSOLETO|NO SABE'
            ],
            [ //5
                'respuesta' => 'EXISTE|NO EXISTE'
            ],
            [ //6
                'respuesta' => 'ES CLARO|POCO CLARO|INADECUADO'
            ],
            [ //7
                'respuesta' => 'EN JORANADAS ACADEMICAS|COMISIONES DE TRABAJO|TALLERES Y PANELES DE DISCUSION|TRABAJO SISTEMATICO DE LA CARRERA'
            ],
            [ //8
                'respuesta' => 'RIGIDO|FLEXIBLE|NO SABE'
            ],
            [ //9
                'respuesta' => 'SI|PARCIALMENTE|NO|NO SABE'
            ],
            [ //10
                'respuesta' => 'ESTABLECER UNA COHERENCIA ADECUADA ENTRE MISION, METAS Y OBJETIVOS DE LA CARRERA CON LOS REQUERIMIENTOS DEL PAIS Y/O REGION|ESTABLECER CLARAMENTE EL PESO ESPECIFICO DE LAS ACTIVIDADES DE ENSEÑANZA, INVESTIGACION E INTERACCION SOCIAL|ESTABLECER UNA COHERENCIA ADECUADA ENTRE EL CAMPO OCUPACIONAL Y EL PERFIL DE LOS GRADUADOS|REALIZAR UNA MEJOR SELECCION Y ORGANIZACION DE LAS ASIGNATURAS|ESTABLECER UN ALTO GRADO DE CONSISTENCIA CON CONCEPCIONES EDUCATIVAS Y CURRICULARES INNOVADORAS|ESTRUCTURAR LOS NIVELES DE COMPLEJIDAD DE LOS APRENDIZAJES|ESTABLECER CARRERAS INTERMEDIAS|OTROS'
            ],
            [ //11
                'respuesta' => 'CONSEJO FACULTATIVO|JORNADAS ACADEMICAS|CONSEJO DE CARRERA|ASAMBLEA'
            ],
            [ //12
                'respuesta' => 'SI|NO|ALGUNOS PROGRAMAS'
            ],
            [ //13
                'respuesta' => 'IDENTIFICACION|JUSTIFICACION|OBJETIVOS|CONTENIDO ANALITICO|CRONOGRAMA|ESTRATEGIAS DE ENSEÑANZA - APRENDIZAJE|ESTRATEGIAS DE EVALUACION|RECURSOS DIDACTICOS|BIBLIOGRAFIA|TODAS (LAS ANTERIORES)'
            ],
            [ //14
                'respuesta' => 'SI|NO|ALGUNOS'
            ],
            [ //15
                'respuesta' => 'PROYECTOR DE MULTIMEDIA|PIZARRA ELECTRONICA|VIDEOCONFERENCIAS (ZOOM-MEET-JITSI-SKAPE-OTROS)|PROYECTOR DE VIDEOS|EQUIPO DE COMPUTACION|EQUIPO DE LABORATORIO|PIZARRA|PLATAFORMAS VIRTUALES (MOODLE-GOOGLE CLASSROOMS-MICROSOFT TEAMS-CANVAS-ETC.)|OTROS'
            ],
            [ //16
                'respuesta' => 'CAMBIOS OBSERVADOS EN LOS PROGRAMAS ANALITICOS Y METODOS DE ENSEÑANZA|CAMBIOS OBSERVADOS EN LA BIBLIOGRAFIA BASICA ACTUALIZADA|MEJORAMIENTO DEL RENDIMIENTO ACADEMICO|INFORMACION OBTENIDA SISTEMATICAMENTE DE LOS ALUMNOS'
            ],
            [ //17
                'respuesta' => 'EFICIENTES|BUROCRATICOS'
            ],
            [ //18
                'respuesta' => 'TOTALMENTE|PARCIALMENTE|NO SE APLICA'
            ],
            [ //19
                'respuesta' => 'LAS CONOCE|NO LAS CONOCE'
            ],
            [ //20
                'respuesta' => 'SON CLARAS Y SATISFACTORIAS|SON CLARAS E INSATISFACTORIAS|SON CONFUSAS E INSATISFACTORIAS'
            ],
            [ //21
                'respuesta' => 'RECONOCIMIENTO ECONOMICO|RECONOCIMIENTO ACADEMICO|DISTINCION HONORIFICA'
            ],
            [ //22
                'respuesta' => 'BECAS TRABAJO|BECAS COMEDOR|DISTINCION HONORIFICA|TITULACION DIRECTA'
            ],
            [ //23
                'respuesta' => 'SUFICIENTE|INSUFICIENTE|EXCEDENTARIA'
            ],
            [ //24
                'respuesta' => 'ADECUADA|INADECUADA|SUPERIOR'
            ],
            [ //25
                'respuesta' => 'APROPIADOS|INAPROPIADOS|BUROCRATICOS'
            ],
            [ //26
                'respuesta' => 'DIRECTA|INDIRECTA'
            ],
            [ //27
                'respuesta' => 'PLANES Y PROGRAMAS DE ESTUDIO|SELECCION Y PROMOCION DOCENTE|ADMISION Y DESEMPEÑO ACADEMICO DE LOS ALUMNOS|PLANIFICACION FINANCIERA Y ELABORACION PRESUPUESTARIA'
            ],
            [ //28
                'respuesta' => 'SI|NO|A VECES'
            ],
            [ //29
                'respuesta' => 'CADA 2 AÑOS|ENTRE 3 - 5 AÑOS|5 O MAS AÑOS|OTROS'
            ],
        ];
        foreach ($respuesta_definidas as $respuesta) {
            RespuestaDefinida::create($respuesta);
        }
    }
}
