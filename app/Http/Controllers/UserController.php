<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        // Mostrar formulario para crear un nuevo usuario
    }

    public function store(CreateUserRequest $request)
    {
        // Encriptar la contraseña antes de almacenarla en la base de datos
        $password = Hash::make($request->input('password'));

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $password,
            'status' => $request->input('status'),
            'id_carrera' => $request->input('id_carrera'),
            'id_rol' => $request->input('id_rol'),
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }
}
