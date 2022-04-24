<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsuarioController
};

// Sempre usar name para quando precisar alterar, não ser preciso alterar em todos os lugares que chamam
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

Route::get('/usuarios/{id}', [UsuarioController::class, 'show'])->name('usuarios.show');

Route::get('/', function () {
    return view('welcome');
});
