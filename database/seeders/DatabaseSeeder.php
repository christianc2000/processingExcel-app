<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CuestionarioSeeder::class);
        $this->call(DimensionSeeder::class);
        $this->call(RespuestaDefinidaSeeder::class);
        $this->call(PreguntaSeeder::class);
        $this->call(LocalidadSeeder::class);
        $this->call(FacultadSeeder::class);
        $this->call(CarreraSeeder::class);
    }
}
