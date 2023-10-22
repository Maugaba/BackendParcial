<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    use HasFactory;
    protected $fillable = ['nombres','apellidos','sede','carrera','semestre','carne','estado'];

    public function setTitleAttribute($value){
        $this->attributes['nombres'] = strtoupper($value);
    }
    public function getDescriptionAttribute($value){
        return ucfirst($value);
    }
}
