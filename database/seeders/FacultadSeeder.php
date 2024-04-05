<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facultades')->insert([
            [
                'nombre'            => 'Facultad Integral Chiquitana',
                'nombre_mayuscula'            => 'FACULTADINTEGRALCHIQUITANA',
                'localidad_id'      => 4,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral de Ichilo',
                'nombre_mayuscula'            => 'FACULTADINTEGRALDEICHILO',
                'localidad_id'      => 7,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral de los Valles Cruceños',
                'nombre_mayuscula'            => 'FACULTADINTEGRALDELOSVALLESCRUCEÑOS',
                'localidad_id'      => 6,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral del Chaco',
                'nombre_mayuscula'            => 'FACULTADINTEGRALDELCHACO',
                'localidad_id'      => 2,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral del Noreste',
                'nombre_mayuscula'            => 'FACULTADINTEGRALDELNORESTE',
                'localidad_id'      => 5,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral del Norte',
                'nombre_mayuscula'            => 'FACULTADINTEGRALDELNORTE',
                'localidad_id'      => 3,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Politécnica',
                'nombre_mayuscula'            => 'FACULTADPOLITÉCNICA',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Agrícolas',
                'nombre_mayuscula'            => 'FACULTADDECIENCIASAGRÍCOLAS',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Contables, Auditoría, Sistemas de Control de Gestión y Finanzas',
                'nombre_mayuscula'            => 'FACULTADDECIENCIASCONTABLES,AUDITORÍA,SISTEMASDECONTROLDEGESTIÓNYFINANZAS',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Económicas y Empresariales',
                'nombre_mayuscula'            => 'FACULTADDECIENCIASECONÓMICASYEMPRESARIALES',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Exactas y Tecnología',
                'nombre_mayuscula'            => 'FACULTADDECIENCIASEXACTASYTECNOLOGÍA',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Farmacéuticas y Bioquímicas',
                'nombre_mayuscula'            => 'FACULTADDECIENCIASFARMACÉUTICASYBIOQUÍMICAS',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Jurídicas, Políticas, Sociales y Relaciones Internacionales',
                'nombre_mayuscula'            => 'FACULTADDECIENCIASJURÍDICAS,POLÍTICAS,SOCIALESYRELACIONESINTERNACIONALES',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Veterinarias',
                'nombre_mayuscula'            => 'FACULTADDECIENCIASVETERINARIAS',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias de la Salud Humana',
                'nombre_mayuscula'            => 'FACULTADDECIENCIASDELASALUDHUMANA',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias del Hábitat, Diseño y Arte',
                'nombre_mayuscula'            => 'FACULTADDECIENCIASDELHÁBITAT,DISEÑOYARTE',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Humanidades',
                'nombre_mayuscula'            => 'FACULTADDEHUMANIDADES',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ingeniería en Ciencias de la Computación y Telecomunicaciones',
                'nombre_mayuscula'            => 'FACULTADDEINGENIERÍAENCIENCIASDELACOMPUTACIÓNYTELECOMUNICACIONES',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ]


        ]);

    }
}
