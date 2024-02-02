<?php

namespace App\Http\DTOs;

class CarreraDTO
{
    public ?int $id;
    public string $nombre;
    // Agrega más propiedades según tus necesidades

    public function __construct(?int $id, string $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        // Inicializa más propiedades según tus necesidades
    }

    public function obtenerNombre(): string
    {
        return $this->nombre;
    }
}
