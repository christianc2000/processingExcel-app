<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            [
                'name' => 'Seguridad en la UAGRM',
                'quantity_person' => 3
            ],
            [
                'name' => 'Deportistas en la UAGRM',
                'quantity_person' => 3
            ],
            [
                'name' => 'Censo 2024 UAGRM',
                'quantity_person' => 3
            ]
        ];

        foreach ($files as $file) {
            File::create($file);
        }
    }
}
