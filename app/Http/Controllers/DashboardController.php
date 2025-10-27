@extends('layouts.app')

@section('content')
<div class="container text-center mt-4">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="80">
    <h3 class="mt-2 text-primary fw-bold">Universidade Pedagógica</h3>

    <div class="row mt-5 g-4 justify-content-center">
        <!-- Estagiários -->
        <div class="col-md-3">
            <a href="{{ route('estagiarios.index') }}" class="text-decoration-none">
                <div class="card shadow-sm border-primary hover-card">
                    <div class="card-body">
                        <i class="bi bi-mortarboard-fill text-primary" style="font-size: 2.5rem;"></i>
                        <h5 class="card-title mt-2">Estagiários</h5>
                        <h2 class="text-primary">{{ $totalEstagiarios }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <!-- Supervisores -->
        <div class="col-md-3">
            <a href="{{ route('supervisores.index') }}" class="text-decoration-none">
                <div class="card shadow-sm border-success hover-card">
                    <div class="card-body">
                        <i class="bi bi-person-badge-fill text-success" style="font-size: 2.5rem;"></i>
                        <h5 class="card-title mt-2">Supervisores</h5>
                        <h2 class="text-success">{{ $totalSupervisores }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <!-- Departamentos -->
        <div class="col-md-3">
            <a href="{{ route('departamentos.index') }}" class="text-decoration-none">
                <div class="card shadow-sm border-info hover-card">
                    <div class="card-body">
                        <i class="bi bi-building text-info" style="font-size: 2.5rem;"></i>
                        <h5 class="card-title mt-2">Departamentos</h5>
                        <h2 class="text-info">{{ $totalDepartamentos }}</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<style>
.hover-card:hover {
    transform: scale(1.05);
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}
</style>
@endsection
