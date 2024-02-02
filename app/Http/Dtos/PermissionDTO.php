<?php

namespace App\DTOs;

use App\Models\Permission;

class PermissionDTO
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

    public static function fromTipoPermiso(Permission $permission)
    {
        return new self($permission->id, $permission->name, "");
    }

    public static function getIdPermiso(Permission $permission)
    {
        return $permission->id;
    }
}
