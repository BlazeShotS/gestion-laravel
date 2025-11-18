<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Domain\Usuarios\Controllers\UsuarioController;

Route::post('/usuario/insertar',[UsuarioController::class, 'store']);
Route::post('/usuario/login',[UsuarioController::class, 'login']);

