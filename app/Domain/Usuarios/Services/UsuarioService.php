<?php

namespace App\Domain\Usuarios\Services;

use App\Domain\Usuarios\Repositories\UsuarioRepository;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;


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

    public function login(string $email, string $password)
    {
        $usuario = $this->usuarioRepository->buscarPorEmail($email);

        if (!$usuario) {
            return ['error' => 'Usuario no encontrado'];
        }

        if (!Hash::check($password, $usuario->contrasena)) {
            return ['error' => 'Contraseña incorrecta'];
        }

        return $usuario; // Login correcto
    }

}
