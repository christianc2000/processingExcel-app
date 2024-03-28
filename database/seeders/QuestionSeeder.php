<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //    'Seguridad en la UAGRM','Deportistas en la UAGRM','Censo 2024 UAGRM'

        $questions = [
            [
                'ask' => '¿El parqueo tiene cámaras de vigilancia?',
                'file_id' => 1
            ],
            [
                'ask' => '¿Controlan el ingreso a la universidad?',
                'file_id' => 1
            ],
            [
                'ask' => '¿La universidad tiene equipos de gymnasia para capacitar a sus deportistas?',
                'file_id' => 2
            ],
            [
                'ask' => '¿Hay algún seguro de salud para deportistas?',
                'file_id' => 2
            ],
            [
                'ask' => '¿El censo se realizó con estudiantes de la universidad?',
                'file_id' => 3
            ],
            [
                'ask' => '¿Cumplirán con los puntos a los censistas voluntarios que son estudiantes de la UAGRM?',
                'file_id' => 3
            ]
        ];
        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
