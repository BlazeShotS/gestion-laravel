<?php

namespace App\Domain\Usuarios\Repositories;

use App\Domain\Usuarios\Models\Usuario;

class UsuarioRepository
{
    public function crear(array $data): Usuario
    {
        return Usuario::create($data);
    }

    public function buscarPorEmail(string $email): ?Usuario
    {
        return Usuario::where('email', $email)->first();
    }

}
