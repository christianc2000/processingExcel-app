<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'cantidad_encuestados',
        'fuente_id',
        'carrera_facultad_id',
    ];

    public function fuente(){
        return $this->belongsTo(Fuente::class);
    }
    public function carreraFacultad(){
        return $this->belongsTo(CarreraFacultad::class);
    }
    public function archivoPreguntas(){
        return $this->hasMany(ArchivoPregunta::class);
    }
}
