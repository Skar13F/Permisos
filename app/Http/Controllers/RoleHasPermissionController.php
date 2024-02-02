<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleHasPermissionController extends Controller
{
    public function getPermissionsByRole($roleName)
    {
        $role = Role::where('name', $roleName)->firstOrFail();
        return $role->roleHasPermissions->pluck('permission.name')->toArray();
    }

    public function getRolesByPermission($permissionName)
    {
        $permission = Permission::where('name', $permissionName)->firstOrFail();
        $roles = $permission->roles;
        return $roles->pluck('name')->toArray();
    }
}
