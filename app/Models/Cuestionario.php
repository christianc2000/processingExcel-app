<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre'
    ];

    public function preguntas(){
        return $this->hasMany(Pregunta::class);
    }
    public function archivos(){
        return $this->hasMany(Archivo::class);
    }
}
