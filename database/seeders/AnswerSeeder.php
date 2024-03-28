<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\File;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers_data = [
            [
                'value' => 'Sí'
            ],
            [
                'value' => 'No'
            ],
            [
                'value' => 'No sabe'
            ]
        ];
        foreach ($answers_data as $answer) {
            Answer::create($answer);
        }

        $files = File::all();
        $answers = Answer::all();
        foreach ($files as $file) {
            foreach ($file->questions as $question) {
                foreach ($answers as $answer) {
                    $question->answers()->attach($answer, ['quantity' => 1]);
                }
            }
        }
    }
}
