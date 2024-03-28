<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'ask',
        'file_id'
    ];

    public function answers()
    {
        return $this->belongsToMany(Answer::class)->withPivot('quantity')->withTimestamps();
    }

    public function file(){
        return $this->belongsTo(File::class);
    }
}
