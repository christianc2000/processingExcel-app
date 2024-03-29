<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //    'Seguridad en la UAGRM','Deportistas en la UAGRM','Censo 2024 UAGRM'

        $preguntas = [
            //dimension 1
            [
                'enunciado' => '1 ¿Conoce usted el estatuto orgánico vigente de la universidad?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 1
            ],
            [
                'enunciado' => '2 ¿Es actualizado y responde al encargo social?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 1
            ],
            //dimension 2
            [
                'enunciado' => '3 ¿El plan de desarrollo estratégico de la carrera es actualizado y coherente con su misión y sus objetivos?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 2
            ],
            [
                'enunciado' => '4.A Para verificar el cumplimiento del plan de desarrollo estratégico de la carrera, se cuenta con algún sistema de: Seguimiento y Control',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 2
            ],
            [
                'enunciado' => '4.B Para verificar el cumplimiento del plan de desarrollo estratégico de la carrera, se cuenta con algún sistema de: Evaluación',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 2
            ],
            //dimension 5
            [
                'enunciado' => '5.A Conoce usted los reglamentos de: Régimen Docente',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 3
            ],
            [
                'enunciado' => '5.B Conoce usted los reglamentos de: Régimen Estudiantil',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 3
            ],
            [
                'enunciado' => '5.C Conoce usted los reglamentos de: Régimen Administrativo',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 3
            ],
            [
                'enunciado' => '5.D Conoce usted los reglamentos de: Evaluación del Rendimiento Estudiantil',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 3
            ],
            [
                'enunciado' => '5.E Conoce usted los reglamentos de: Graduación',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 3
            ],
            [
                'enunciado' => '5.F Conoce usted los reglamentos de: Admisión y Permanencia Estudiantil',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 3
            ],
            //dimension 6
            [
                'enunciado' => '6.A Conoce usted los manuales de funcionamiento de: Laboratorio',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 4
            ],
            [
                'enunciado' => '6.B Conoce usted los manuales de funcionamiento de: Gabinetes',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 4
            ],
            [
                'enunciado' => '6.C Conoce usted los manuales de funcionamiento de: Personal Administrativo',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 4
            ],
            [
                'enunciado' => '6.D Conoce usted los manuales de funcionamiento de: Instalaciones Especiales Complementarias',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 4
            ],
            [
                'enunciado' => '6.E Conoce usted los manuales de funcionamiento de: Funcionamiento y Organización de las Direcciones Universitarias',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 4
            ],
            [
                'enunciado' => '6.F Conoce usted los manuales de funcionamiento de: Biblioteca',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 4
            ],
            [
                'enunciado' => '6.G Conoce usted los manuales de funcionamiento de: Centro de Cómputos',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 4
            ],
            //dimensión 9
            [
                'enunciado' => '7 ¿Se han realizado procesos de autoevaluación en la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 5
            ],
            //dimensión 11
            [
                'enunciado' => '8 ¿La misión de la carrera responde a los requerimientos que tiene la región y el país?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 6
            ],
            [
                'enunciado' => '9 ¿Las decisiones de la carrera están en concordancia con la misión de esta?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 6
            ],
            [
                'enunciado' => '10 ¿La misión de la carrera es concordante con la misión de la universidad?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 6
            ],
            //dimension 12
            [
                'enunciado' => '11 ¿Existe coherencia entre la misión, la visión y los objetivos de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 7
            ],
            [
                'enunciado' => '12 ¿Existen mecanismos de difusión para hacer conocer la misión, la visión y los objetivos de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 7
            ],
            //dimension 13
            [
                'enunciado' => '13 ¿Los objetivos y metas que pretende alcanzar la carrera están definidos en forma clara?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 8
            ],
            [
                'enunciado' => '14 ¿La carrera informa a la comunidad universitaria y regional de sus objetivos y logros?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 8
            ],
            [
                'enunciado' => '14.A ¿La carrera informa a la comunidad universitaria y regional de sus objetivos y logros?: ¿Cómo informa?',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 3,
                'dimension_id' => 8
            ],
            [
                'enunciado' => '15.A Para verificar el cumplimiento de objetivos y metas la carrera cuenta con algún sistema de: Evaluación',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 8
            ],
            [
                'enunciado' => '15.B Para verificar el cumplimiento de objetivos y metas la carrera cuenta con algún sistema de: Seguimiento y Control',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 8
            ],
            [
                'enunciado' => '16 Los objetivos trazados por la carrera son:',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 4,
                'dimension_id' => 8
            ],
            [
                'enunciado' => '17.A Están expresados en algún documento los objetivos de: Enseñanza',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 8
            ],
            [
                'enunciado' => '17.B Están expresados en algún documento los objetivos de: Investigación',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 8
            ],
            [
                'enunciado' => '17.C Están expresados en algún documento los objetivos de: Interacción Social',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 8
            ],
            [
                'enunciado' => '17.D Están expresados en algún documento los objetivos de: Postgrado de la Carrera',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 8
            ],
            //dimension 16
            [
                'enunciado' => '18 ¿Cuenta la carrera con algún programa de apoyo para la inserción de los titulados en el campo laboral que le corresponde?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 9
            ],
            [
                'enunciado' => '19 ¿Cuenta la carrera con algún sistema de seguimiento a sus titulados?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 9
            ],
            [
                'enunciado' => '20 ¿El proyecto curricular refleja flexibilidad a las necesidades de formación en coherencia con los campos de trabajo?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 9
            ],
            //dimension 17
            [
                'enunciado' => '21 ¿Están expresados en algún documento los objetivos curriculares de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 10
            ],
            //dimesnion 18
            [
                'enunciado' => '22 El perfil profesional de su carrera ¿está definido en forma clara, precisa y es de conocimiento público?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 11
            ],
            [
                'enunciado' => '23 ¿Participan los docentes en el proceso de elaboración del perfil profesional?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 11
            ],
            [
                'enunciado' => '24 ¿El perfil profesional toma en cuenta mecanismos de adecuación a las necesidades del medio?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 11
            ],
            [
                'enunciado' => '25 ¿El perfil profesional es concordante con la misión y los objetivos de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 11
            ],
            //dimension 19
            [
                'enunciado' => '26 ¿Los objetivos del plan de estudio están claramente formulados para alcanzar el perfil profesional y los objetivos de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 12
            ],
            [
                'enunciado' => '27 ¿Existe un diseño claro del plan de estudios que se desprenda de la misión y objetivos de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 5,
                'dimension_id' => 12
            ],
            [
                'enunciado' => '27.A ¿Existe un diseño claro del plan de estudios que se desprenda de la misión y objetivos de la carrera?: Si existen:',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 6,
                'dimension_id' => 12
            ],
            [
                'enunciado' => '28 ¿Existe un mecanismo de discusión y difusión de los programas del plan de estudio y de los programas analíticos?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 12
            ],
            [
                'enunciado' => '29 ¿Existe un mecanismo de actualización del plan de estudios?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 12
            ],
            [
                'enunciado' => '30 ¿En qué instancias se realiza este trabajo?',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 7,
                'dimension_id' => 12
            ],
            //Dimension 20
            [
                'enunciado' => '32 ¿En el plan de estudio de la carrera hay un equilibrio adecuado entre los insumos teóricos y las aplicaciones prácticas?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 13
            ],
            [
                'enunciado' => '33 ¿Cómo es el plan de estudios de la carrera en la actualidad?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 8,
                'dimension_id' => 13
            ],
            [
                'enunciado' => '34 ¿Las asignaturas impartidas en el plan de estudio, permiten el logro del perfil profesional propuesto?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 9,
                'dimension_id' => 13
            ],
            [
                'enunciado' => '35 ¿Se necesitan reformas en el plan de estudios?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 13
            ],
            [
                'enunciado' => '35.A ¿Se necesitan reformas en el plan de estudios?: ¿Cuáles?',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 10,
                'dimension_id' => 13
            ],
            [
                'enunciado' => '36 ¿Se realizan evaluaciones en la carrera acerca de los planes y programas de estudio?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 13
            ],
            [
                'enunciado' => '36.A ¿Se realizan evaluaciones en la carrera acerca de los planes y programas de estudio?: ¿En qué instancias se evalúan?',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 11,
                'dimension_id' => 13
            ],
            //Dimension 21
            [
                'enunciado' => '37 ¿Existen programas analíticos detallados de cada asignatura en la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 14
            ],
            [
                'enunciado' => '38 ¿Reciben los alumnos programas analíticos por materia al iniciar cada periodo académico?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 12,
                'dimension_id' => 14
            ],
            //Dimension 22
            [
                'enunciado' => '39 En caso de sí. los programas analíticos que aspectos incluyen en su formato:',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 13,
                'dimension_id' => 15
            ],
            [
                'enunciado' => '40 ¿Están disponibles los programas analíticos para su distribución entre los alumnos?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 14,
                'dimension_id' => 15
            ],
            //Dimension 23
            [
                'enunciado' => '41.A ¿Se cumplen las actividades educativas obligatorias, para lograr el perfil profesional?, tales como:: Cumplimiento de calendario',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 9,
                'dimension_id' => 16
            ],
            [
                'enunciado' => '41.B ¿Se cumplen las actividades educativas obligatorias, para lograr el perfil profesional?, tales como:: Avance de materia',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 9,
                'dimension_id' => 16
            ],
            [
                'enunciado' => '41.C ¿Se cumplen las actividades educativas obligatorias, para lograr el perfil profesional?, tales como:: Conclusión de programas',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 9,
                'dimension_id' => 16
            ],
            //Dimension 24
            [
                'enunciado' => '42 ¿Se cuenta con medios didácticos apropiados para producir una asimilación activa de los cursos?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 17
            ],
            [
                'enunciado' => '42.A ¿Se cuenta con medios didácticos apropiados para producir una asimilación activa de los cursos?: ¿Qué recursos se utilizan?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 15,
                'dimension_id' => 17
            ],
              //Dimension 25
              [
                'enunciado' => '43 ¿El contenido de las asignaturas que se imparten es relevante?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 18
            ],
            [
                'enunciado' => '44 ¿Los programas de perfeccionamiento y actualización docente tienen impacto en la actualización de los planes y programas de estudios?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 18
            ],
            [
                'enunciado' => '44.A ¿Los programas de perfeccionamiento y actualización docente tienen impacto en la actualización de los planes y programas de estudios?: Si la respuesta es SI, ¿Cómo se han evaluado esos impactos?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 16,
                'dimension_id' => 18
            ],
            //Dimension 26
            [
                'enunciado' => '45 ¿Existe una adecuada línea de mando al interior de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '46.A Las relaciones de poder existentes al interior de la facultad (formal e informal) facilitan su integración y gestión en relación con: : La toma de decisiones',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '46.B Las relaciones de poder existentes al interior de la facultad (formal e informal) facilitan su integración y gestión en relación con: : La planificación',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '46.C Las relaciones de poder existentes al interior de la facultad (formal e informal) facilitan su integración y gestión en relación con: : El control',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '46.D Las relaciones de poder existentes al interior de la facultad (formal e informal) facilitan su integración y gestión en relación con: : La gobernabilidad',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '46.E Las relaciones de poder existentes al interior de la facultad (formal e informal) facilitan su integración y gestión en relación con: : Crear un ambiente de trabajo',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '47 ¿La actual estructura organizacional de la universidad facilita y estimula el desarrollo de las actividades académicas?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '48 ¿Existen políticas para mejorar la estructura académica?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '49 ¿Considera usted que los procedimientos administrativos responden a la estructura formal de la institución?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '49.A ¿Considera usted que los procedimientos administrativos responden a la estructura formal de la institución?: ¿Cómo son los procedimientos?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 17,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '50 ¿Existe en la carrera reglamentos académicos vigente y concordante con la misma?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '51 Estos reglamentos se cumplen:',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 18,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '52 ¿Existe en la carrera reglamentos administrativos vigente y concordante con la misma?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '53 Estos reglamentos se cumplen: ',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 18,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '54 ¿Existe en la carrera reglamentos estudiantiles vigente y concordante con la misma?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '55 Estos reglamentos se cumplen: ',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 18,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '56 ¿Conoce las funciones, derechos y responsabilidades contenidas en las normas universitarias?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 19,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '56.A ¿Conoce las funciones, derechos y responsabilidades contenidas en las normas universitarias?: Si las conoce ¿Cómo cree usted que son estas normas?',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 20,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '56.B ¿Conoce las funciones, derechos y responsabilidades contenidas en las normas universitarias?: ¿Se cumplen?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '57.A Conoce usted las funciones que cumplen, los consejos y comités relacionados con la carrera: Consejo universitario',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '57.B Conoce usted las funciones que cumplen, los consejos y comités relacionados con la carrera: Consejo facultativo',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '57.C Conoce usted las funciones que cumplen, los consejos y comités relacionados con la carrera: Consejo de carrera',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '57.D Conoce usted las funciones que cumplen, los consejos y comités relacionados con la carrera: Jornadas académicas',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '57.E Conoce usted las funciones que cumplen, los consejos y comités relacionados con la carrera: Asambleas docentes',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '57.F Conoce usted las funciones que cumplen, los consejos y comités relacionados con la carrera: Consejo de profesores',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '57.G Conoce usted las funciones que cumplen, los consejos y comités relacionados con la carrera: Asambleas estudiantiles',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '58.A ¿Sus funciones, se encuentran claramente definida?: Consejo universitario',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '58.B ¿Sus funciones, se encuentran claramente definida?: Consejo facultativo',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '58.C ¿Sus funciones, se encuentran claramente definida?: Consejo de carrera',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '58.D ¿Sus funciones, se encuentran claramente definida?: Jornadas académicas',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '58.E ¿Sus funciones, se encuentran claramente definida?: Asambleas docentes',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '58.F ¿Sus funciones, se encuentran claramente definida?: Consejo de profesores',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '58.G ¿Sus funciones, se encuentran claramente definida?: Asambleas estudiantiles',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '59 ¿La carrera cuenta con políticas para motivar e incentivar a mejorar el trabajo del personal docente?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '59.A ¿La carrera cuenta con políticas para motivar e incentivar a mejorar el trabajo del personal docente?: Si la respuesta es SI en qué consiste:',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 21,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '61 ¿La carrera cuenta con políticas para motivar e incentivar a mejorar el desempeño y permanencia del estudiante?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 19
            ],
            [
                'enunciado' => '61.A ¿La carrera cuenta con políticas para motivar e incentivar a mejorar el desempeño y permanencia del estudiante?: Si la respuesta es SI en qué consiste',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 22,
                'dimension_id' => 19
            ],
            //dimensión 27
            [
                'enunciado' => '62 ¿Se cumplen los criterios y mecanismos de selección y admisión para elegir las autoridades de la carrera, de acuerdo con los reglamentos vigentes?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 20
            ],
            [
                'enunciado' => '63 ¿Son adecuados estos mecanismos?',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 20
            ],
            [
                'enunciado' => '64 ¿Existen mecanismos de evaluación de las autoridades de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 20
            ],
            [
                'enunciado' => '65 ¿Son adecuados estos mecanismos?',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 20
            ],
            //dimension 28 
            [
                'enunciado' => '67.A ¿Es adecuada la cantidad y nivel de preparación del personal administrativo?: Cantidad',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 23,
                'dimension_id' => 21
            ],
            [
                'enunciado' => '67.B ¿Es adecuada la cantidad y nivel de preparación del personal administrativo?: Calidad',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 24,
                'dimension_id' => 21
            ],
            //dimension  29
            [
                'enunciado' => '68 ¿Recibe usted información por parte de la carrera respecto al calendario académico maestro de oferta, adición, retiro, cambio de carrera, traspaso, mesas examinadoras, cursos de verano, casos especiales, conclusión del periodo académico y otras actividades?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 22
            ],
            [
                'enunciado' => '69.A ¿Esta información es?: Adecuada',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 22
            ],
            [
                'enunciado' => '69.B ¿Esta información es?: Oportuna',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 22
            ],
            [
                'enunciado' => '69.C ¿Esta información es?: No la conoce',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 22
            ],
            [
                'enunciado' => '70 ¿Existen mecanismos de comunicación entre los niveles jerárquico al interior de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 22
            ],
            [
                'enunciado' => '71 ¿Cómo son estos mecanismos?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 25,
                'dimension_id' => 22
            ],
            [
                'enunciado' => '72 ¿Recibe usted por parte de las autoridades orientación adecuada acerca de las normas y exigencias de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 22
            ],
            //dimension 30
            [
                'enunciado' => '73 ¿Participa usted en el proceso de toma de decisiones de la institución y/o carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '74.A Si la respuesta es sí ¿cómo es su participación?: Consejo universitario',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 26,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '74.B Si la respuesta es sí ¿cómo es su participación?: Consejo facultativo',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 26,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '74.C Si la respuesta es sí ¿cómo es su participación?: Consejo de carrera',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 26,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '74.D Si la respuesta es sí ¿cómo es su participación?: Jornadas académicas',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 26,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '74.E Si la respuesta es sí ¿cómo es su participación?: Asambleas docentes',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 26,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '74.F Si la respuesta es sí ¿cómo es su participación?: Consejo de profesores',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 26,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '74.G Si la respuesta es sí ¿cómo es su participación?: Asambleas estudiantiles',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 26,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '75 ¿Sienten los docentes y los estudiantes, que son parte del proceso de toma de decisiones?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 26,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '75.A ¿Sienten los docentes y los estudiantes, que son parte del proceso de toma de decisiones?: Participa en las decisiones sobre:',
                'tipo' => 'M',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 27,
                'dimension_id' => 23
            ],
            [
                'enunciado' => '76 ¿Se enfrentan y resuelven los problemas en dichas reuniones?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 28,
                'dimension_id' => 23
            ],
            // dimension 31
            [
                'enunciado' => '78 ¿Con que frecuencia se realizan procesos de autoevaluación en la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 29,
                'dimension_id' => 24
            ],
            // dimension 32
            [
                'enunciado' => '79 ¿Existen criterios de selección y admisión de docentes?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 25
            ],
            [
                'enunciado' => '79.A ¿Existen criterios de selección y admisión de docentes?: ¿Son adecuados?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 25
            ],
            [
                'enunciado' => '79.B ¿Existen criterios de selección y admisión de docentes?: ¿Se cumplen?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 25
            ],
            [
                'enunciado' => '80 ¿Existe un sistema adecuado de evaluación del desempeño de los docentes en la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 2,
                'dimension_id' => 25
            ],
            [
                'enunciado' => '81 ¿Existe una planificación de actividades docentes de la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 25
            ],
            // dimension 35
            [
                'enunciado' => '82 ¿Los docentes realizan trabajos de investigación e interacción social en la carrera?',
                'tipo' => 'U',
                'cuestionario_id' => 1,
                'respuesta_definida_id' => 1,
                'dimension_id' => 26
            ],
        ];
        foreach ($preguntas as $pregunta) {
            Pregunta::create($pregunta);
        }
    }
}
