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
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Camiri',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Montero',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'San Ignacio de Velasco',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'San Julián',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Vallegrande',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Yapacaní',
                'created_at'        => now(),
                'updated_at'        => now()
            ]


        ]);

    }
}
