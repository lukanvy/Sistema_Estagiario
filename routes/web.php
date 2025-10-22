<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormEstagiarios;

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
Route::get('/estagiario/create', [FormEstagiario::class, 'create'])->name('estagiario.create');

// Gravar no banco
Route::post('/estagiario', [estagiarios::class, 'store'])->name('estagiario.store');
