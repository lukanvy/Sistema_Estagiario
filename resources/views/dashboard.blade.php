@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12 text-center">
            <h2 class="mt-3">Dashboard</h2>
            <p class="text-muted">Resumo rápido do sistema</p>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card text-white bg-primary h-100">
                <div class="card-body">
                    <h5 class="card-title">Estagiários Ativos</h5>
                    <p class="display-6 mb-0">{{ $totalEstagiariosAtivos ?? 0 }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success h-100">
                <div class="card-body">
                    <h5 class="card-title">Supervisores</h5>
                    <p class="display-6 mb-0">{{ $totalSupervisores ?? 0 }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-secondary h-100">
                <div class="card-body">
                    <h5 class="card-title">Estagiários Encerrados</h5>
                    <p class="display-6 mb-0">{{ $totalEncerrados ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p>Use o menu para navegar entre estagiários, supervisores e relatórios.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
