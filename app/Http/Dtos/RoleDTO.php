<?php
namespace App\Http\DTOs;

use App\Models\Role;

class RoleDTO
{
    public ?int $id;
    public string $name;
    public string $guard_name;

    public function __construct(?int $id, string $name, string $guard_name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->guard_name = $guard_name;
    }

    public static function fromTipoRol(Role $rol)
    {
        return new self($rol->id, $rol->nombre, "");
    }
}
