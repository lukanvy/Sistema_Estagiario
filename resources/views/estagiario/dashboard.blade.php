@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h3 class="mb-4">🎓 Painel de Gestão de Estagiários</h3>

    <div class="row g-4">
        <!-- Estagiários Ativos -->
        <div class="col-md-4">
            <div class="card shadow text-center border-success">
                <div class="card-body">
                    <i class="bi bi-people-fill text-success" style="font-size: 2.5rem;"></i>
                    <h5 class="card-title mt-2">Estagiários Ativos</h5>
                    <h2 class="text-success">{{ $totalEstagiariosAtivos }}</h2>
                    <a href="{{ route('estagiario.index') }}" class="btn btn-outline-success btn-sm mt-2">Ver Lista</a>
                </div>
            </div>
        </div>

        <!-- Supervisores -->
        <div class="col-md-4">
            <div class="card shadow text-center border-primary">
                <div class="card-body">
                    <i class="bi bi-person-badge-fill text-primary" style="font-size: 2.5rem;"></i>
                    <h5 class="card-title mt-2">Supervisores</h5>
                    <h2 class="text-primary">{{ $totalSupervisores }}</h2>
                    <a href="#" class="btn btn-outline-primary btn-sm mt-2">Ver Supervisores</a>
                </div>
            </div>
        </div>

        <!-- Estágios Encerrados -->
        <div class="col-md-4">
            <div class="card shadow text-center border-secondary">
                <div class="card-body">
                    <i class="bi bi-archive-fill text-secondary" style="font-size: 2.5rem;"></i>
                    <h5 class="card-title mt-2">Estágios Encerrados</h5>
                    <h2 class="text-secondary">{{ $totalEncerrados }}</h2>
                    <a href="{{ route('estagiario.historico') }}" class="btn btn-outline-secondary btn-sm mt-2">Ver Histórico</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
