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
                'localidad_id'      => 4,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral de Ichilo',
                'localidad_id'      => 7,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral de los Valles Cruceños',
                'localidad_id'      => 6,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral del Chaco',
                'localidad_id'      => 2,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral del Noreste',
                'localidad_id'      => 5,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Integral del Norte',
                'localidad_id'      => 3,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad Politécnica',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Agrícolas',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Contables, Auditoría, Sistemas de Control de Gestión y Finanzas',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Económicas y Empresariales',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Exactas y Tecnología',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Farmacéuticas y Bioquímicas',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Jurídicas, Políticas, Sociales y Relaciones Internacionales',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias Veterinarias',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias de la Salud Humana',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ciencias del Hábitat, Diseño y Arte',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Humanidades',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Facultad de Ingeniería en Ciencias de la Computación y Telecomunicaciones',
                'localidad_id'      => 1,
                'created_at'        => now(),
                'updated_at'        => now()
            ]


        ]);

    }
}
