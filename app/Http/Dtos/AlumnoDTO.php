<?php

namespace App\Http\DTOs;

use App\Models\Alumno;

class AlumnoDTO
{
    public ?int $id;
    public string $matricula;
    public string $nombre;
    public string $apellido;
    public int $semestre;
    public string $grupo;
    public int $carrera;


    public function __construct(Alumno $alumno)
    {
        $this->id = $alumno-> id;
        $this->matricula = $alumno-> matricula;
        $this->nombre = $alumno-> nombre;
        $this->apellido = $alumno-> apellido;
        $this->semestre = $alumno-> semestre;
        $this->carrera = $alumno-> Carrera->nombre;
        $this->grupo = $alumno-> grupo;
    }
}
