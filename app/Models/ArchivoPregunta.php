<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivoPregunta extends Model
{
    use HasFactory;
    protected $fillable=[
        'respuesta',
        'muestra',
        'cantidad',
        'porcentaje',
        'archivo_id',
        'pregunta_id'
    ];

    public function archivo(){
        return $this->belongsTo(Archivo::class);
    }
    public function pregunta(){
        return $this->belongsTo(Pregunta::class);
    }
}
