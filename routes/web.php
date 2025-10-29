<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EstagiarioController;
use App\Models\Estagiario;

Route::get('/welcome', function () {
    return view('welcome', ['estagiarios' => Estagiario::all()]);
});

Route::get('/estagio', function () {
    return view('estagiario');
});

Route::get('/FE', function () {
      return view('FormEstagiario');
});


// Formulário de cadastro
Route::get('/estagiario/create', [EstagiarioController::class, 'create'])->name('estagiario.create');

// Gravar no banco
//ddd("hello word");
Route::post('/estagiario', [EstagiarioController::class, 'store'])->name('estagiario.store');

//tabela dos estagiarios
Route::get('/list', [EstagiarioController::class, 'index'])->name('estagiario.index');



Route::resource('estagiario', EstagiarioController::class);

Route::get('/estagiarios/{id}/edit', [EstagiarioController::class, 'edit'])->name('estagiarios.edit');


Route::put('/estagiarios/{id}', [EstagiarioController::class, 'update'])->name('estagiarios.update');


Route::put('/detalhe', [EstagiarioController::class, 'show'])->name('estagiario.show');

//Route::get('/estagiario/historico', [EstagiarioController::class, 'historico'])->name('estagiario.historico');

//Route::get('/dashboard', [EstagiarioController::class, 'dashboard'])->name('dashboard');
