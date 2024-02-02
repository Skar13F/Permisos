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
    public int $id_carrera;
    public int $carrera;

    //setea valores para agregar un alumno a la bd
    public function __construct(?int $id, string $matricula,
        string $nombre, string $apellido, int $semestre, int $id_carrera, string $grupo)
    {
        $this->id = $id;
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->semestre = $semestre;
        $this->id_carrera = $id_carrera;
        $this->grupo = $grupo;
    }

    //setea valores para mostrar un alumno
    public static function fromAlumno(Alumno $alumno): AlumnoDTO
    {
        return new self(
            $alumno->id,
            $alumno->matricula,
            $alumno->nombre,
            $alumno->apellido,
            $alumno->semestre,
            $alumno->Carrera->nombre,
            $alumno->grupo
        );
    }
}
