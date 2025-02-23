<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('modulos.users.Ingresar');
});

// Route::get('/Crear-primer-User', [UsuariosController::class, 'PrimerUser']);


Auth::routes();

Route::get('Inicio', [UsuariosController::class, 'Inicio']);


