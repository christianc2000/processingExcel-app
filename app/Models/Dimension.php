<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre'
    ];

    public function preguntas(){
        return $this->hasMany(Pregunta::class);
    }
}
