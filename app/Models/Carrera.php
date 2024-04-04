<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carrera extends Model
{
    use HasFactory;

    public $table = "carreras";
    protected $fillable = [
        'nombre'
    ];
    public function carrerasFacultades()
    {
        return $this->hasMany(CarreraFacultad::class);
    }
}
