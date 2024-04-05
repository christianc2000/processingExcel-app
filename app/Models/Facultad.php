<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Facultad extends Model
{
    use HasFactory;

    public $table = "facultades";
    protected $fillable = [
        'nombre',
        'nombre_mayuscula',
        'localidad_id'
    ];

    public function carrerasFacultades()
    {
        return $this->hasMany(CarreraFacultad::class);
    }
    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }
}
