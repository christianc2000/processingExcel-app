<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carreras')->insert([
            [
                'nombre'            => 'Actividad Física',
                'nombre_mayuscula'  => 'ACTIVIDADFISICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Administración de Empresas',
                'nombre_mayuscula'  => 'ADMINISTRACIONDEEMPRESA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Arquitectura',
                'nombre_mayuscula'  => 'ARQUITECTURA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Arte',
                'nombre_mayuscula'  => 'ARTE',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Biología',
                'nombre_mayuscula'  => 'BIOLOGÍA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Bioquímica',
                'nombre_mayuscula'  => 'BIOQUÍMICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ciencias Ambientales',
                'nombre_mayuscula'  => 'CIENCIASAMBIENTALES',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ciencias de la Comunicación',
                'nombre_mayuscula'  => 'CIENCIASDELACOMUNICACIÓN',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ciencias de la Educación',
                'nombre_mayuscula'  => 'CIENCIASDELAEDUCACIÓN',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ciencias Políticas y Administración Pública',
                'nombre_mayuscula'  => 'CIENCIASPOLÍTICASYADMINISTRACIÓNPÚBLICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Comercio Internacional',
                'nombre_mayuscula'  => 'COMERCIOINTERNACIONAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Construcciones Civiles',
                'nombre_mayuscula'  => 'CONSTRUCCIONESCIVILES',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Contaduría Pública',
                'nombre_mayuscula'  => 'CONTADURÍAPÚBLICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Derecho',
                'nombre_mayuscula'  => 'DERECHO',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Diseño Integral',
                'nombre_mayuscula'  => 'DISEÑOINTEGRAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Economía',
                'nombre_mayuscula'  => 'ECONOMÍA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Electricidad Industrial',
                'nombre_mayuscula'  => 'ELECTRICIDADINDUSTRIAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Enfermería',
                'nombre_mayuscula'  => 'ENFERMERÍA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Electrónica',
                'nombre_mayuscula'  => 'ELECTRÓNICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Farmacia',
                'nombre_mayuscula'  => 'FARMACIA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Gestión del Turismo',
                'nombre_mayuscula'  => 'GESTIÓNDELTURISMO',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Información y Control de Gestión',
                'nombre_mayuscula'  => 'INFORMACIÓNYCONTROLDEGESTIÓN',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Agrícola (Montero)',
                'nombre_mayuscula'  => 'INGENIERÍAAGRÍCOLA(MONTERO)',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Agronómica',
                'nombre_mayuscula'  => 'INGENIERÍAAGRONÓMICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Agropecuaria',
                'nombre_mayuscula'  => 'INGENIERÍAAGROPECUARIA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Ambiental',
                'nombre_mayuscula'  => 'INGENIERÍAAMBIENTAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Civil',
                'nombre_mayuscula'  => 'INGENIERÍACIVIL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Comercial',
                'nombre_mayuscula'  => 'INGENIERÍACOMERCIAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería de Alimentos',
                'nombre_mayuscula'  => 'INGENIERÍADEALIMENTOS',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería de Control de Procesos',
                'nombre_mayuscula'  => 'INGENIERÍADECONTROLDEPROCESOS',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería del Petróleo y Gas Natural',
                'nombre_mayuscula'  => 'INGENIERÍADELPETRÓLEOYGASNATURAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Electromecánica',
                'nombre_mayuscula'  => 'INGENIERÍAELECTROMECÁNICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería en Agrimensura',
                'nombre_mayuscula'  => 'INGENIERÍAENAGRIMENSURA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería en Agropecuaria',
                'nombre_mayuscula'  => 'INGENIERÍAENAGROPECUARIA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería en Materiales',
                'nombre_mayuscula'  => 'INGENIERÍAENMATERIALES',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería en Metalurgia',
                'nombre_mayuscula'  => 'INGENIERÍAENMETALURGIA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería en Redes y Telecomunicaciones',
                'nombre_mayuscula'  => 'INGENIERÍAENREDESYTELECOMUNICACIONES',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería en Sistemas',
                'nombre_mayuscula'  => 'INGENIERÍAENSISTEMAS',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Financiera',
                'nombre_mayuscula'  => 'INGENIERÍAFINANCIERA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Forestal',
                'nombre_mayuscula'  => 'INGENIERÍAFORESTAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Industrial',
                'nombre_mayuscula'  => 'INGENIERÍAINDUSTRIAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Informática',
                'nombre_mayuscula'  => 'INGENIERÍAINFORMÁTICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Petrolera',
                'nombre_mayuscula'  => 'INGENIERÍAPETROLERA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Ingeniería Química',
                'nombre_mayuscula'  => 'INGENIERÍAQUÍMICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Lenguas Modernas y Filología Hispánica',
                'nombre_mayuscula'  => 'LENGUASMODERNASYFILOLOGÍAHISPÁNICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Licenciatura en Ofimática',
                'nombre_mayuscula'  => 'LICENCIATURAENOFIMÁTICA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Mecánica General',
                'nombre_mayuscula'  => 'MECÁNICAGENERAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Medicina',
                'nombre_mayuscula'  => 'MEDICINA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Medicina Veterinaria y Zootecnia',
                'nombre_mayuscula'  => 'MEDICINAVETERINARIAYZOOTECNIA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Monitoreo Socioambiental',
                'nombre_mayuscula'  => 'MONITOREOSOCIOAMBIENTAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Odontología',
                'nombre_mayuscula'  => 'ODONTOLOGÍA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Planificación Territorial',
                'nombre_mayuscula'  => 'PLANIFICACIÓNTERRITORIAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Psicología',
                'nombre_mayuscula'  => 'PSICOLOGÍA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Relaciones Internacionales',
                'nombre_mayuscula'  => 'RELACIONESINTERNACIONALES',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Sociología',
                'nombre_mayuscula'  => 'SOCIOLOGÍA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Trabajo Social',
                'nombre_mayuscula'  => 'TRABAJOSOCIAL',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Zootecnia',
                'nombre_mayuscula'  => 'ZOOTECNIA',
                'created_at'        => now(),
                'updated_at'        => now()
            ]


        ]);

    }
}
