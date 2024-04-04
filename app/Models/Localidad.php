<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    use HasFactory;

    public $table = "localidades";
    protected $fillable=[
        'nombre'
    ];
    public function facultades(){
        return $this->hasMany(Facultad::class);
    }
}
