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
        // 'fuente',
        'dimension_id',
        'fuente_id'
    ];

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }
    public function archivoPreguntas()
    {
        return $this->hasMany(ArchivoPregunta::class);
    }

    public function fuentes()
    {
        return $this->belongsToMany(Fuente::class)->withTimestamps();;
    }
}
