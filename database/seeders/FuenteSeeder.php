<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fuentes')->insert([
            [
                'nombre'            => 'AUTORIDADES',
                'abreviacion' => 'A',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'DOCENTES',
                'abreviacion' => 'D',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'EMPLEADORES',
                'abreviacion' => 'Em',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'ESTUDIANTES',
                'abreviacion' => 'E',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'TITULADOS',
                'abreviacion' => 'T',
                'created_at'        => now(),
                'updated_at'        => now()
            ]

        ]);
    }
}
