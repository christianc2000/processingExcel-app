<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $fillable=[
        'valor'
    ];

    public function preguntas(){
        return $this->belongsToMany(Pregunta::class)->withPivot('cantidad')->withTimestamps();
    }
}
