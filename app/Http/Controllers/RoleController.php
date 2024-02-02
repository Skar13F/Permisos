<?php

namespace App\Http\Controllers;

use App\Http\DTOs\RoleDTO;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function extract()
    {
        $roles = Role::all();
        $rolesDTO = collect();

        foreach ($roles as $rol) {
            $DTO = RoleDTO::fromTipoRol($rol);
            $rolesDTO->push($DTO);
        }

        return $rolesDTO;
    }

    public function extractOne($id)
    {
        $rol = Role::find($id);
        return RoleDTO::fromTipoRol($rol);
    }
}
