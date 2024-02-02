<?php

namespace Database\Seeders;

use App\Http\DTOs\UserDTO;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea un usuario de ejemplo para acceder a la app
        $userDTO = new UserDTO(
            'Ejemplo Usuario',
            'usuario@example.com',
            true,
            1, // ID de carrera
            1  // ID de rol
        );

        User::create([
            'name' => $userDTO->name,
            'email' => $userDTO->email,
            'password' => Hash::make('12121212'),
            'status' => $userDTO->status,
            'id_carrera' => $userDTO->id_carrera,
            'id_rol' => $userDTO->id_rol,
        ]);

    }
}
