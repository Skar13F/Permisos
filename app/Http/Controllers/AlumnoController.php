<?php

namespace App\Http\Controllers;

use App\Http\DTOs\AlumnoDTO;
use App\Models\Alumno;
use Illuminate\Http\Request;


class AlumnoController extends Controller
{
    //nos mostrará todos los alumnos
    public function extract()
    {
        $alumnos = Alumno::all();
        $alumnosDTO = collect();
    
        foreach ($alumnos as $alumno) {
            $DTO = AlumnoDTO::fromAlumno($alumno);
            $alumnosDTO->push($DTO);
        }
    
        return $alumnosDTO;
    }
    

    //buscará un alumo por su matrícula
    public function extractOne($matricula)
    {
        $alumno = Alumno::find($matricula);
        return AlumnoDTO::fromAlumno($alumno);
    }
}
