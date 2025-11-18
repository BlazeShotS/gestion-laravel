<?php

namespace App\Domain\Usuarios\Services;

use App\Domain\Usuarios\Repositories\UsuarioRepository;
use Illuminate\Validation\ValidationException;

class UsuarioService
{
    protected $usuarioRepository;
    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function crearUsuario(array $data)
    {
        return $this->usuarioRepository->crear($data);
    }

}
