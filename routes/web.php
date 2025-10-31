<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstagiarioController;
use App\Http\Controllers\DepartamentoController;
use App\Models\Estagiario;

/*
|--------------------------------------------------------------------------
| Rotas Web
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registar rotas web para sua aplicação.
|
*/

// Rota 1: Dashboard (A rota raiz '/')
Route::get('/', [EstagiarioController::class, 'dashboard'])->name('dashboard');

// Rotas Personalizadas de Estagiário (Definir antes do Resource)
// Rota para o histórico (estagiários encerrados)
Route::get('/estagiario/historico', [EstagiarioController::class, 'historico'])->name('estagiario.historico');

// Rota para a ação de encerrar (Deve usar PUT/PATCH, mas GET/POST é comum para ações simples em formulários)
// Vou assumir que usa POST para esta ação
Route::post('/estagiario/{id}/encerrar', [EstagiarioController::class, 'encerrar'])->name('estagiario.encerrar');

// Rota 2: Rotas de Recurso para Estagiário (Cria index, create, store, show, edit, update, destroy)
Route::resource('estagiario', EstagiarioController::class);


// Rota 3: Rotas de Recurso para Departamento
Route::resource('departamento', DepartamentoController::class);

Route::get('/estagiarios/{id}/edit', [EstagiarioController::class, 'edit'])->name('estagiarios.edit');
Route::put('/estagiarios/{id}', [EstagiarioController::class, 'update'])->name('estagiarios.update');


// Outras rotas simples
Route::get('/supervisores', function () { return 'Supervisores'; })->name('supervisor.index');
Route::get('/horarios', function () { return 'Horários'; })->name('horario.index');
Route::get('/relatorios', function () { return 'Relatórios'; })->name('relatorio.index');
Route::get('/configuracoes', function () { return 'Configurações'; })->name('configuracoes.index');
Route::get('/logout', function () { return 'Logout'; })->name('logout');