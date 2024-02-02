<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    protected $fillable = ['tipo', 'fecha_inicio', 'fecha_fin',
        'hora_inicio', 'hora_fin', 'motivo', 'descripcion', 'status', 'id_secretaria', 'matricula'];

    public function secretaria()
    {
        return $this->belongsTo(User::class, 'id_secretaria');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'matricula');
    }
}
