<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $fillable = [
        'enunciado',
        'tipo',
        'cuestionario_id',
        'respuesta_definida_id',
        'dimension_id'
    ];

    public function respuestas()
    {
        return $this->belongsToMany(Respuesta::class)->withPivot('cantidad')->withTimestamps();
    }

    public function cuestionario(){
        return $this->belongsTo(Cuestionario::class);
    }
    public function respuestaDefinida(){
        return $this->belongsTo(RespuestaDefinida::class);
    }
    public function dimension(){
        return $this->belongsTo(Dimension::class);
    }
}
