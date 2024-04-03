<?php

namespace Database\Seeders;

use App\Models\Dimension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dimensions = [
            [ //1
                'nombre' => 'DIMENSIÓN 1: CONTEXTO INSTITUCIONAL'
            ],
            [ //2
                'nombre' => 'DIMENSIÓN 2: PROYECTO CURRICULAR'
            ],
            [ //3
                'nombre' => 'DIMENSIÓN 3: COMUNIDAD UNIVERSITARIA'
            ],
            [ //4
                'nombre' => 'DIMENSIÓN 4: INFRAESTRUCTURA'
            ]
        ];
        foreach ($dimensions as $dimension) {
            Dimension::create($dimension);
        }
    }
}
