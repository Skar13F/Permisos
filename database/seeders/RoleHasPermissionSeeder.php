<?php

namespace Database\Seeders;

use App\Models\RoleHasPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asignar permisos al Rol 1
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 1]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 2]);

        // Asignar permisos al Rol 2
        RoleHasPermission::create(['role_id' => 2, 'permission_id' => 2]);

    }
}
