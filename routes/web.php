<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::controller(GestionUsuariosController::class)->group(function () {
//     Route::prefix('gestion_usuarios')->group(function () {
//         Route::get('/index', 'index')->name('gestion_usuarios.index');
//         Route::post('/crear', 'crear')->name('ajax.usuario.crear');
//         Route::post('/editar', 'editar')->name('ajax.usuario.editar');
//         Route::post('/buscar', 'obtenerUsuarioById')->name('ajax.usuario.obtenerById');

//     });
// });
