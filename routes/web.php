<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EstagiarioController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/estagio', function () {
    return view('estagiario');
});

Route::get('/FE', function () {
      return view('FormEstagiario');
});

// Listagem
Route::get('/estagiario', [EstagiarioController::class, 'index'])->name('estagiario.index');

// Formulário de cadastro
Route::get('/estagiario/create', [EstagiarioController::class, 'create'])->name('estagiario.create');

// Gravar no banco
//ddd("hello word");
Route::post('/estagiario', [EstagiarioController::class, 'store'])->name('estagiario.store');

Route::resource('estagiario', EstagiarioController::class);

Route::put('/estagiario/{id}/editar', [App\Http\Controllers\EstagiarioController::class, 'encerrar'])->name('estagiario.encerrar');



Route::put('/estagiario/{id}/encerrar', [App\Http\Controllers\EstagiarioController::class, 'encerrar'])->name('estagiario.encerrar');

Route::get('/estagiario/historico', [App\Http\Controllers\EstagiarioController::class, 'historico'])->name('estagiario.historico');

Route::get('/dashboard', [App\Http\Controllers\EstagiarioController::class, 'dashboard'])->name('dashboard');
