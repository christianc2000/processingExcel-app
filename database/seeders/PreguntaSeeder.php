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

        $pregunta = Pregunta::create([
            'enunciado' => '1. ¿Conoce usted el estatuto orgánico vigente de la Universidad? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '2.  En caso de que la respuesta sea SI   ¿Es actualizado y se aplica? (A.D.E.)',
            'tipo' => 'U,C', //Uniseleccion y condicional
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '3. ¿Conoce los derechos y deberes del estamento estudiantil? (A.D.E)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '4. Conoce usted los reglamentos de: (A.D.E)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => '4.1 Régimen Docente|4.2 Régimen Estudiantil|4.3 Régimen Administrativo|4.4 Evaluación del Rendimiento Estudiantil|4.5 Graduación|4.6 Admisión y Permanencia Estudiantil',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '5. Conoce usted los manuales de funcionamiento de: (A.D.E)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => '5.1 Laboratorio|5.2 Gabinetes|5.3 Personal Administrativo|5.4 Instalaciones Especiales Complementarias|5.5 Funcionamiento y Organización de las Direcciones Universitarias|5.6 Biblioteca|5.7 Centro de Cómputos',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '6. ¿Conoce usted la Misión y la Visión de su carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '7. En caso que la respuesta sea SI ¿La Misión y Visión de la Carrera son actualizadas y responden a los requerimientos que tiene la región y el país? (A.D.E.)',
            'tipo' => 'U,C',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '8. Los objetivos y metas que pretende alcanzar la carrera están definidos en forma clara? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '9. ¿Existen mecanismos de difusión para dar a conocer la Misión, Visión y Objetivos de la Carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '10. ¿La carrera cuenta con un sistema de información y comunicación accesible? A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '11. En caso que la respuesta sea SI ¿Qué sistema de información y comunicación utiliza la carrera? (A.D.E.)',
            'tipo' => 'M,C',
            // 'fuente'=>'A,D,E',
            'respuesta' => '11.1 Boletines (escritos, digitales)|11.2 Páginas WEB de la Universidad|11.3 Redes sociales|11.4 Correo electrónico',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '12. ¿Conoce el Plan de Desarrollo Estratégico o Plan de Mejora de la Carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '13. ¿A participado en la elaboración del Plan de Desarrollo Estratégico o Plan de Mejoras de su carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '14. ¿Para verificar el cumplimiento del Plan de Desarrollo Estratégico de la Carrera, se cuenta con algún sistema de: (A, D)[Seguimiento y control]',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '14. ¿Para verificar el cumplimiento del Plan de Desarrollo Estratégico de la Carrera, se cuenta con algún sistema de: (A, D)[Evaluación ]',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '15. ¿Se cumplen los criterios y mecanismos de selección y admisión para elegir las autoridades de la Carrera, de acuerdo a los reglamentos vigentes? (A.D.E)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '16. En caso que la respuesta sea SI ¿Son adecuados estos mecanismos? (A.D.E.)',
            'tipo' => 'U,C',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '17. ¿Existen mecanismos de evaluación de las autoridades de la Carrera? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '18. En caso que la respuesta sea SI ¿Son adecuados estos mecanismos? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '19. ¿La actual estructura organizacional de la Universidad, facilita y estimula el desarrollo de las actividades académicas? (enseñanza-aprendizaje, investigación e interacción social) (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '20. ¿Existen políticas para mejorar estructura organizacional de la Universidad? (A. D)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '21. ¿Conoce usted el organigrama de su facultad y de su carrera? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '22. ¿Considera usted que los procedimientos administrativos responden a la estructura formal de la Institución? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '22.1  En caso que la respuesta sea SI, NO ¿Cómo son estos procedimientos? (A.D.)',
            'tipo' => 'U,C',
            // 'fuente'=>'A,D',
            'respuesta' => 'EFICIENTES|BUROCRÁTICOS',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '23.1. ¿Es adecuada la cantidad del personal administrativo?: CANTIDAD (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'Suficiente|Insuficiente|Excesivo',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '23.2. ¿Es adecuado el nivel de preparación del personal administrativo? : CALIDAD (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D', 
            'respuesta' => 'Ineficiente|Poco eficiente|Eficiente',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '24. ¿Existen normativas de evaluación y seguimiento del personal administrativo? (A) ',
            'tipo' => 'U',
            // 'fuente'=>'A',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '25. ¿Existen mecanismos de evaluación continua y seguimiento de la gestión académica? (A) ',
            'tipo' => 'U',
            // 'fuente'=>'A',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '26. ¿Por qué sistema de selección ingreso usted a la Universidad? (E)',
            'tipo' => 'U',
            // 'fuente'=>'E',
            'respuesta' => '26.1 Bachiller Destacado|26.2 Deportista destacado|26.3 Bachilleres discapacidad|26.4 Ingreso planificados provinciales|26.5 PSA|26.6 CUP Facultativo|26.7 Traspaso|26.8 Exención de Prueba',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '27. ¿Los estudiantes reciben una inducción adecuada referente a los procesos que desarrolla la carrera y la universidad?  (A.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '28. ¿Qué opinión tiene usted sobre el proceso de admisión? (E.)',
            'tipo' => 'U',
            // 'fuente'=>'E',
            'respuesta' => 'Es muy exigente|Es adecuado',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '29. ¿Recibe la Carrera la cantidad óptima de alumnos que quisiera tener admitidos? (A.)',
            'tipo' => 'U',
            // 'fuente'=>'A',
            'respuesta' => 'En exceso|Optimo|Insuficiente',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '30. ¿Cómo caracterizaría el nivel de formación de los alumnos admitidos? (D.)',
            'tipo' => 'M',
            // 'fuente'=>'D',
            'respuesta' => 'Con adecuado nivel de formación|Con regular nivel de formación|Con bajo nivel de formación',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '31. ¿La carrera desarrolla actividades para informar a los recién ingresados sobre el funcionamiento de la institución y sobre el perfil profesional que establece la misma? (D. A. E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '32. ¿Qué becas para los estudiantes conoce (seleccione las que conoce) (D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'D,E',
            'respuesta' => '32.1 De excelencia|32.2 Becas IDH estudio|32.3 Becas IDH interacción social|32.4 Becas IDH Investigación científica|32.5 Becas IDH investigación tesis|32.6 Becas IDH albergue universitario|32.7 Becas IDH Internado rotatorio|32.8 Becas IDH comedor|32.9 Becas facultativas comedor',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '33. ¿Se han realizado procesos de autoevaluación en la Carrera? (A.D.E.T.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,T,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2,4,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '34. ¿Con que frecuencia se realizan Procesos de Autoevaluación en la Carrera? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'Entre 4 - 5 años|5 o más años|No sabe',
            'dimension_id' => 1,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '35. ¿El proyecto curricular refleja flexibilidad a las necesidades de formación en coherencia con los campos de trabajo? (A.D.E.T)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,T,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '36. ¿Están expresados en algún documento los objetivos curriculares de la Carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '37. El perfil profesional de la Carrera ¿está definido en forma clara, precisa y es de conocimiento público? (A.D.E.T)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,T,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '38. ¿Participan los docente en el proceso de elaboración del rediseños curricular de la carrera? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '39. ¿El perfil profesional es concordante con la Misión y los Objetivos de la Carrera? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '40. ¿Existe un diseño claro del plan de estudios de la Carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '41. ¿Existe un mecanismo de actualización del proyecto curricular? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '42. ¿Existe mecanismos de difusión de los programas del plan de estudio? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '43. ¿Existe mecanismos de difusión de los programas analíticos? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '44. ¿El plan de estudios de la Carrera es ajustado a las necesidades del medio laboral? (T. Em.)',
            'tipo' => 'U',
            // 'fuente'=>'T,Em',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([3,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '45. ¿En el Plan de Estudio de la Carrera hay un equilibrio adecuado entre los insumos teóricos y las aplicaciones prácticas? (A.D.E.T)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,T,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '46. ¿Cómo es el Plan de Estudios de la Carrera en la actualidad? (A.D.E)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'RÍGIDO|FLEXIBLE|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '47. ¿Se realizan evaluaciones en la Carrera acerca del plan de estudio? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '47.1 En caso que la respuesta sea SI ¿En qué instancias se evalúan? (A.D.E.)',
            'tipo' => 'M,C',
            // 'fuente'=>'A,D,E',
            'respuesta' => '1. Consejo Facultativo|2. Consejo de Carrera|3. Jornadas Académicas|4. Asamblea|5. Seguimiento y Evaluación Curricular',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '48. ¿Reciben los estudiantes sus programas analíticos por materia, al iniciar cada periodo académico? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|ALGUNOS PROGRAMAS',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '49. ¿Se cumplen las actividades establecidas en el calendario académico de la universidad, facultad y carrera? (A.D.E)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|PARCIALMENTE|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '50. ¿Se cuenta con recursos educacionales apropiados para cumplir con el proceso de enseñanza-aprendizaje del proyecto curricular? (A.D.E)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '50.1  En caso que la respuesta sea SI   ¿Qué recursos educacionales cuenta la carrera?  (A.D.E.)',
            'tipo' => 'M,C',
            // 'fuente'=>'A,D,E',
            'respuesta' => '50.1.1. Proyector de Multimedia|50.1.2. Proyector de videos|50.1.3. Aulas virtuales|50.1.4. Internet/Nube|50.1.5. Pizarra|50.1.6. Pizarras digitales interactivas.|50.1.7. Equipo computación|50.1.8. Equipos de laboratorio',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '51.1 Qué opina Usted respecto a la CANTIDAD, de las dotaciones de equipamiento (los espacios donde se realizan prácticas (laboratorios, anfiteatros, clínicas, gabinetes, etc.)) de la carrera (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SUFICIENTES|INSUFICIENTES|ENEXISTENTES',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '51.2  Qué opina Usted respecto a la CALIDAD, de las dotaciones de equipamiento (los espacios donde se realizan prácticas (laboratorios, anfiteatros, clínicas, gabinetes, etc.)) de la carrera (A.D.E.) ',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENA|REGULAR|MALA',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '51.3 Qué opina Usted respecto a la CANTIDAD, de las dotaciones de equipamiento ( Equipos de computación existentes  ) (A.D.E.) ',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SUFICIENTES|INSUFICIENTES|ENEXISTENTES',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '51.4  Qué opina Usted respecto a la CALIDAD, de las dotaciones de equipamiento ( Equipos de computación existentes  ) (A.D.E.) ',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUEN FUNCIONAMIENTO|MAL FUNCIONAMIENTO|FUERA DE FUNCIONAMIENTO',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '52. ¿La carrera cuenta con convenios (nacionales, departamentales, municipales) para que los estudiantes realicen prácticas pre-profesionales? (A.D.E)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '53. ¿Los estudiantes de la carrera realizan prácticas pre-profesionales? (A.D.E)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '54 ¿Se cuenta con políticas claras sobre líneas de investigación, desarrollo tecnológico para desarrollar en cada gestión académica? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '54.1 En caso que la respuesta sea SI, estas políticas: (A.D.E.)',
            'tipo' => 'U,C',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SE APLICAN|SE APLICAN PARCIALMENTE|NO SE APLICAN',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '55. ¿Los programas de investigación y desarrollo tecnológico, son coherentes con los objetivos de la Carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '56. ¿Se cuentan con un sistema de evaluación y seguimiento para verificar el cumplimiento de las investigaciones realizadas?   (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '57. ¿Participan los estudiantes en los proyectos de investigación de la carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'FRECUENTEMENTE|PARCIALMENTE|NO PARTICIPAN',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '58. ¿Existen revistas especializadas, donde se publiquen los resultados de las investigaciones realizadas por docentes y estudiantes? (A.D.E.)  ',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '59. ¿Existen cooperación externas técnica y financiera para el desarrollo de investigación en la Carrera? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '60. ¿La universidad cuenta con un sistema de administración, distribución y reglamentación de los recursos destinados a la investigación y desarrollo tecnológico? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '61. ¿Las investigaciones realizadas tanto dentro de la Carrera como fuera de ella, han producido modificaciones e innovaciones curriculares? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '62. ¿La Carrera cuenta con políticas de extensión e interacción social, para desarrollar en cada gestión académica? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '62.1 En caso que la respuesta sea SI, estas políticas:  (A.D.E.)',
            'tipo' => 'U,C',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SE APLICAN|SE APLICAN PARCIALMENTE|NO SE APLICAN',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '63. ¿Son relevantes los resultados de las actividades de extensión e interacción social que desarrolla la carrera? (A.D.E.T.Em)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,T,E,Em',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,3,4,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '64. ¿Participan los estudiantes en proyectos de extensión e interacción social de la Carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '65. ¿Participan los docentes en proyectos de extensión e interacción social de la Carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '66. ¿La carrera presta   servicios a la comunidad (atención, laboratorio, consultorías)? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '67. ¿La carrera participa de las actividades culturales que se desarrollan, tales como Feria de Ciencia y Cultura, Corso Universitario de Folklore, ¿etc.? (A.D.E.T.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,T,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 2,
        ]);
        $pregunta->fuentes()->attach([1,2,4,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '68. ¿Conoce usted los servicios de salud con los que cuenta el estudiante de la universidad? (A.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '69. ¿Conoce usted si la universidad ofrece servicios de alimentación para los estudiantes? (A.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '70. ¿Conoce usted si la universidad ofrece servicios de apoyo psicológico   para los estudiantes? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '71. ¿Conoce usted si la universidad ofrece servicios de apoyo psicopedagógico para los estudiantes?  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '72.1 ¿Cuál es, a su criterio el nivel de efectividad de los servicios proporcionados a los estudiantes, respecto a: Seguro de Salud (A.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '72.2 ¿Cuál es, a su criterio el nivel de efectividad de los servicios proporcionados a los estudiantes, respecto a: Servicios de Alimentación (AE)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '72.3 ¿Cuál es, a su criterio el nivel de efectividad de los servicios proporcionados a los estudiantes, respecto a: Servicio de atención de emergencia dentro de los predios universitarios (AE)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '72.4 ¿Cuál es, a su criterio el nivel de efectividad de los servicios proporcionados a los estudiantes, respecto a:  Transporte para prácticas  (AE)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '72.5 ¿Cuál es, a su criterio el nivel de efectividad de los servicios proporcionados a los estudiantes, respecto a:  Tutorías (AE)',
            'tipo' => 'U',
            // 'fuente'=>'A,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '73. ¿La universidad, la facultad o carrera promueve la participación de los estudiantes en actividades deportivas recreativa y culturales? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '74. ¿La universidad, la facultad o carrera fomenta la incorporación de actividades de apoyo a la docencia (auxiliaturas)?   (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '75. ¿Conoce usted si la universidad cuenta con movilidad e intercambio estudiantil? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '76. ¿Conoce usted si la universidad cuenta con mecanismos de seguimiento a los titulados (inserción laboral, desarrollo profesional, formación continua, etc.)? (A.D.T.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,T',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '78. ¿La universidad cuenta con reglamento de seguimiento de sus titulados? (A.D.T.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,T',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '79. ¿La universidad, la facultad y la carrera, desarrollan programas de actualización continua que involucre la participación de los titulados? (A.T.)',
            'tipo' => 'U',
            // 'fuente'=>'A,T',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,5],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '81. ¿Existen criterios de selección y admisión de docentes? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '81.1.En caso que la respuesta sea SI ¿Son adecuados? (A.D.)',
            'tipo' => 'U,C',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '81.2. En caso que la respuesta sea SI ¿Se cumplen? (A.D.)',
            'tipo' => 'U,C',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '82. ¿Existe un sistema adecuado de evaluación del desempeño de los docentes en la Carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '83. ¿Existe una planificación de las actividades de los docentes en la Carrera? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '84. ¿Los docentes de la Carrera realizan trabajos de extensión e interacción social? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '85. ¿Los docentes de la Carrera realizan trabajos de investigación? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '86. Que tipos de investigación realizan: (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'BASICA|APLICADA|FORMATIVA',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '87. ¿Los resultados de la investigación e interacción social, son difundidos y adoptados por el medio?  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '88. ¿Los docentes producen libros, textos y/o guías, como material de apoyo de su cátedra?  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '89. ¿Existe una adecuada distribución de las actividades del docente a tiempo completo que tome en cuenta la atención a los estudiantes? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '89.1 En caso que la respuesta sea SI , Como: (A.D.E.)',
            'tipo' => 'U,C',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'ASESORÍAS|TUTORÍAS|APOYO ACADÉMICO',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '90. ¿La universidad, facultad o carrera cuentan con políticas y/o estrategias, para motivar e incentivar a los docente y estudiantes en el desarrollo de trabajos de investigación y producción intelectual? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '91. ¿La carrera planifica capacitación continua al docente en herramientas didácticas para el mejoramiento del proceso de enseñanza aprendizaje?  (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '92. ¿La universidad cuenta con movilidad e intercambio docente? (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '93. ¿En los últimos 5 años ha participado usted en algún programa de movilidad e intercambio docente? (D.)',
            'tipo' => 'U',
            // 'fuente'=>'D',
            'respuesta' => 'SI|NO',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '94. ¿Existe un mecanismo de evaluación al personal administrativo de la carrera y de la facultad?        (A.D.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 3,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '95. ¿La infraestructura física y las instalaciones disponible, son adecuadas a las necesidades de la Carrera? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '96. ¿La carrera cuenta con accesibilidad y movilidad para personas con discapacidad en todos los ambientes académicos? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '97. ¿Participan las autoridades de la Carrera en la planificación, utilización y desarrollo de la infraestructura física? (A)',
            'tipo' => 'U',
            // 'fuente'=>'A',
            'respuesta' => 'SI|NO',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '98. ¿Existe una planificación anual para mantenimiento de la infraestructura y las instalaciones? (A)',
            'tipo' => 'U',
            // 'fuente'=>'A',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '99. ¿Existe una planificación del mejoramiento y mantenimiento del equipamiento académico?  (A.)',
            'tipo' => 'U',
            // 'fuente'=>'A',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '100.1 Según su criterio, ¿cómo calificaría la infraestructura?: Aulas (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '100.2 Según su criterio, ¿cómo calificaría la infraestructura?:  Oficinas de la carrera: (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '100.3 Según su criterio, ¿cómo calificaría la infraestructura?:  Sala de atención del Docente: (asistencia de tutorías): (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '100.4 Según su criterio, ¿cómo calificaría la infraestructura?:   Sala de reuniones (auditorios):    (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '100.5 Según su criterio, ¿cómo calificaría la infraestructura?:   Laboratorios:   (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '100.6 Según su criterio, ¿cómo calificaría la infraestructura?:    Biblioteca    :   (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '100.7 Según su criterio, ¿cómo calificaría la infraestructura?:    Sala de Cómputo    :   (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '100.8 Según su criterio, ¿cómo calificaría la infraestructura?:   Comedor:   (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '100.9 Según su criterio, ¿cómo calificaría la infraestructura?:  Áreas de Recreación (Canchas, coliseo, estadio, etc.):  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENO|REGULAR|MALO|NO EXISTE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '101. ¿La Carrera, dispone de espacio e instalaciones para la realización de trabajos relacionados con la investigación, extensión, monografías y otros (laboratorios especializados)? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO APLICA PARA LA CARRERA',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '102. ¿Los laboratorios y centros experimentales cuentan con el espacio e instalaciones adecuados al número de estudiantes para desarrollar actividades Académicas?  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO APLICA PARA LA CARRERA',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '103. ¿Los laboratorios y centros experimentales cuentan con el equipamiento suficiente de acuerdo al avance tecnológico?  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO APLICA PARA LA CARRERA',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '104. ¿Los laboratorios, gabinetes, centros experimentales e instalaciones especiales, cuentan con manuales y/o reglamentos de normas y medidas de prevención, seguridad, medio ambiente y salud? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '105. ¿La bibliografía básica otorgada por los docentes, tiene coherencia con los conocimientos científicos y tecnológicos actuales? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '106.1. ¿Cuál es su opinión sobre la bibliografía básica existente en la biblioteca? En cuanto a Cantidad:  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SUFICIENTE|INSUFICIENTE|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '106.2. ¿Cuál es su opinión sobre la bibliografía básica existente en la biblioteca? En cuanto a Calidad:  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'ACTUALIZADA|DESACTUALIZADA',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '107. ¿Existen catálogos virtuales (biblioteca digital) que faciliten los servicios de búsqueda y referencia en biblioteca? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '108. ¿Los estudiantes, docentes y administrativos tienen acceso a repositorios bibliográficos internacionales? (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '109. La política de circulación o préstamo de libros, es: (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENA|REGULAR|MALA',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '110. ¿El horario del servicio de biblioteca es adecuado para estudiantes y docentes? (D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'D,E',
            'respuesta' => 'SI|NO|NO SABE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '111. El ambiente académico dentro de la biblioteca es: (D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'D,E',
            'respuesta' => '111.1 Cómodo|111.2. Desordenado|111.3 Caótico|111.4 No se presta al uso destinado|111.5 Respetuoso',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '112. ¿Con qué frecuencia visita usted la biblioteca? (D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'D,E',
            'respuesta' => 'FRECUENTEMENTE|RARA VEZ|NUNCA',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '113 ¿Por qué usted no asiste a la biblioteca? (D.E.)',
            'tipo' => 'M',
            // 'fuente'=>'D,E',
            'respuesta' => '113.1 La biblioteca no tiene bibliográfica adecuada|113.2 Poseo mi propia bibliografía|113.3 El ambiente es inadecuado|113.4 Por problemas de horario|113.5 Por falta de tiempo',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '114. ¿Los docentes recomiendan a los estudiantes la revisión del material que existe en las bibliotecas? (D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'D,E',
            'respuesta' => 'SI|NO',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '115.1 La sala de cómputo de la facultad y/o carrera, cuenta con  CANTIDAD de Equipos de Computación:    : (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SUFICIENTES|INSUFICIENTES|ENEXISTENTES',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '115.2 La sala de cómputo de la facultad y/o carrera, cuenta con  Equipos de Computación, ¿Cuál es su ESTADO?    : (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENA|REGULAR|MALA',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '115.3 La sala de cómputo de la facultad y/o carrera, cuenta con SERVICIOS DE INTERNET: (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SI|NO|NO EXISTE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '116.1 ¿Qué opina Usted respecto a las dotaciones de equipamiento de la carrera en cuanto a  CANTIDAD de equipamiento de los laboratorios existentes    :  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SUFICIENTES|INSUFICIENTES|ENEXISTENTES',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '116.2  ¿Qué opina Usted respecto a la CALIDAD de las dotaciones de equipamiento de los laboratorios existentes    :  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUENA|REGULAR|MALA',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '116.3   ¿Qué opina Usted respecto a la CANTIDAD de las dotaciones de equipos de computación existentes en la Carrera    :  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'SUFICIENTES|INSUFICIENTES|ENEXISTENTES',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '116.4   ¿Qué opina Usted respecto a la CALIDAD de las dotaciones de equipos de computación existentes en la Carrera    :  (A.D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D,E',
            'respuesta' => 'BUEN FUNCIONAMIENTO|MAL FUNCIONAMIENTO|FUERA DE FUNCIONAMIENTO',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '117. ¿Los estudiantes y docentes de la carrera tienen acceso a medios de transporte para las actividades académicas de investigación, extensión e interacción social y otros? (D.E.)',
            'tipo' => 'U',
            // 'fuente'=>'D,E',
            'respuesta' => 'SI|NO|NO CONOCE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([2,4],['estado'=>true]);
        $pregunta = Pregunta::create([
            'enunciado' => '118. ¿La carrera cuenta con un mecanismo de seguimiento al uso de aulas, laboratorios, bibliotecas, instalaciones especiales y otros? (D.A.)',
            'tipo' => 'U',
            // 'fuente'=>'A,D',
            'respuesta' => 'SI|NO|NO CONOCE',
            'dimension_id' => 4,
        ]);
        $pregunta->fuentes()->attach([1,2],['estado'=>true]);
    }
}
