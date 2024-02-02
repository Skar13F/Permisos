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

    public static function extractOneById($id)
    {
        $rol = Role::find($id);
        return RoleDTO::fromTipoRol($rol);
    }

    public static function extractOneByName($nombre)
    {
        $rol = Role::where('name', $nombre)->first();
        return RoleDTO::fromTipoRol($rol);
    }
}
