<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];
    public $table = "fuentes";

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }
    public function preguntas()
    {
        return $this->belongsToMany(Pregunta::class)->withPivot('estado')->withTimestamps();
    }
}
