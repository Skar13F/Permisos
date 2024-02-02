<?php

namespace App\Http\Controllers;

use App\DTOs\PermissionDTO;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function extract()
    {
        $permissions = Permission::all();
        $permissionsDTO = collect();

        foreach ($permissions as $permission) {
            $DTO = PermissionDTO::fromTipoPermiso($permission);
            $permissionsDTO->push($DTO);
        }

        return $permissionsDTO;
    }
    public function extractOnebyId($id)
    {
        $permission = Permission::find($id);
        return PermissionDTO::fromTipoPermiso($permission);
    }

    public function extractOnebyName($nombre)
    {
        $permission = Permission::where('name', $nombre)->first();
        return PermissionDTO::getIdPermiso($permission);
    }
}
