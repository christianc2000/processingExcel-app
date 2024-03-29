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
        'fecha_archivo',
        'cuestionario_id'
    ];

    public function cuestionario(){
        return $this->belongsTo(Cuestionario::class);
    }
}
