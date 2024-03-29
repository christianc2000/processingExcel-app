<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaDefinida extends Model
{
    use HasFactory;
    protected $fillable=[
        'respuesta'
    ];

    public function preguntas(){
        return $this->hasMany(Pregunta::class);
    }
}
