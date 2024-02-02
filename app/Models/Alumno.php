<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = ['matricula', 'nombre', 'apellido', 'semestre', 'id_carrera', 'grupo'];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera');
    }
}
