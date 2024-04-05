<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('localidades')->insert([
            [
                'nombre'            => 'Santa Cruz de la Sierra',
                'nombre_mayuscula'  => 'SANTACRUZDELASIERRA',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Camiri',
                'nombre_mayuscula'  => 'CAMIRI',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Montero',
                'nombre_mayuscula'  => 'MONTERO',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'San Ignacio de Velasco',
                'nombre_mayuscula'  => 'SANIGNACIODEVELASCO',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'San Julián',
                'nombre_mayuscula'  => 'SANJULIÁN',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Vallegrande',
                'nombre_mayuscula'  => 'VALLEGRANDE',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Yapacaní',
                'nombre_mayuscula'  => 'YAPACANÍ',
                'created_at'        => now(),
                'updated_at'        => now()
            ]


        ]);

    }
}
