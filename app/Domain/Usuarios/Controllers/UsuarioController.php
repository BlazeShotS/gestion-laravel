<?php

namespace App\Domain\Usuarios\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Usuarios\Services\UsuarioService;

class UsuarioController extends Controller
{

    protected $usuarioService;

    public function __construct(UsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contrasena' => 'required|string|min:6'
        ]);
        $usuario = $this->usuarioService->crearUsuario($request->all());

        return response()->json([
            'mensaje' => 'Usuario creado correctamente',
            'usuario' => $usuario
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
