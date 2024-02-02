<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;


class CarreraController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();
        return view('carreras.index', compact('carreras'));
    }
}
