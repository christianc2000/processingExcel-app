<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraFacultad extends Model
{
    use HasFactory;

    public $table = "carreras_facultad";
    protected $fillable = [
        'estado',
        'carrera_id',
        'facultad_id'
    ];
    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
    public function facultad()
    {
        return $this->belongsTo(Facultad::class);
    }
}
