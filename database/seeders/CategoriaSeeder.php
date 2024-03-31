<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'nombre'            => 'Autoridades',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Docentes',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Empleadores',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Estudiantes',
                'created_at'        => now(),
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Titulados',
                'created_at'        => now(),
                'updated_at'        => now()
            ]


        ]);
    }
}
