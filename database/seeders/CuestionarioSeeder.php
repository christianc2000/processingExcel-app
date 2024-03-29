<?php

namespace Database\Seeders;

use App\Models\Cuestionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuestionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cuestionario::create([
            'nombre' => 'Proceso de Autoevaluación al Mercosur Arcu-Sur'
        ]);
    }
}
