<?php

namespace App\Http\DTOs;

use App\Models\User;

class UserDTO
{
    public string $name;
    public string $email;
    public bool $status;
    public int $id_carrera;
    public string $carrera;
    public int $id_rol;
    public string $rol;

    // Establece valores para agregar un usuario a la base de datos
    public function __construct(string $name,string $email,bool $status,int $id_carrera,int $id_rol) {
        $this->name = $name;
        $this->email = $email;
        $this->status = $status;
        $this->id_carrera = $id_carrera;
        $this->id_rol = $id_rol;
    }

    // Establece valores para mostrar un usuario
    public static function fromUser(User $user): UserDTO
    {
        return new self(
            $user->name,
            $user->email,
            $user->status,
            $user->Carrera->nombre,
            $user->Role->name,
            $user->id_rol
        );
    }
}
