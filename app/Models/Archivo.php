<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'categoria_id',
        'carrera_facultad_id',
        'cuestionario_id'
    ];

    public function cuestionario(){
        return $this->belongsTo(Cuestionario::class);
    }
}
