@extends('layouts.app')

@section('title', 'Lista de Estagiários')
@section('page-title', 'Lista de Estagiários')
@section('page-subtitle', 'Gerencie os estagiários cadastrados')

@section('content')
<div class="container-fluid">
    <!-- Cabeçalho -->
    <div class="university-header mb-6">
        <div class="logo-wrapper">
            <img src="{{ asset('imagens/up.jfif.jpg') }}" alt="Logotipo da Universidade" class="university-logo">
        </div>
        <h4 class="university-title">Universidade Pedagógica</h4>
        <p class="university-subtitle">Sistema de Gestão de Estagiários</p>
    </div>

    <!-- Card principal -->
    <div class="form-container">
        <div class="form-header">
            <div class="form-icon">
                <i class="bi bi-people-fill"></i>
            </div>
            <div>
                <h3 class="form-title">Lista de Estagiários</h3>
                <p class="form-subtitle">Todos os estagiários cadastrados no sistema</p>
            </div>
        </div>

        <!-- Botão novo estagiário -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="flex-grow-1"></div>
            <a href="{{ route('estagiario.create') }}" class="btn-submit">
                <i class="bi bi-person-plus me-2"></i>
                Novo Estagiário
            </a>
        </div>

        <!-- Mensagens de sucesso -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Tabela -->
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-4">Nome Completo</th>
                        <th>Curso</th>
                        <th>Ano</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Supervisor</th>
                        <th>Alocação</th>
                        <th>Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($estagiarios as $e)
                    <tr class="clickable-row" data-href="{{ route('estagiario.show', $e->id) }}">
                        <td class="ps-4 fw-medium">{{ $e->nome_completo }}</td>
                        <td>{{ $e->curso }}</td>
                        <td>{{ $e->ano }}</td>
                        <td>
                            <a href="mailto:{{ $e->email }}" class="text-decoration-none">
                                {{ $e->email }}
                            </a>
                        </td>
                        <td>{{ $e->telefone }}</td>
                        <td>{{ $e->supervisor }}</td>
                        <td>{{ $e->alocacao }}</td>
                        <td>
                            @php
                                $statusClass = 'bg-secondary';
                                if($e->status == 'Ativo') $statusClass = 'bg-success';
                                elseif($e->status == 'Inativo') $statusClass = 'bg-danger';
                                elseif($e->status == 'Concluído') $statusClass = 'bg-primary';
                            @endphp
                            <span class="badge {{ $statusClass }}">{{ $e->status }}</span>
                        </td>
                        <td class="text-center action-cell">
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="{{ route('estagiario.show', $e->id) }}" 
                                   class="btn btn-outline-primary" 
                                   title="Ver detalhes">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('estagiario.edit', $e->id) }}" 
                                   class="btn btn-outline-warning" 
                                   title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('estagiario.destroy', $e->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-outline-danger" 
                                            title="Apagar"
                                            onclick="return confirm('Tem certeza que deseja apagar este estagiário?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center py-4 text-muted">
                            <i class="bi bi-inbox display-4 d-block mb-2"></i>
                            Nenhum estagiário cadastrado
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

                <!-- Paginação -->
            @if($estagiarios instanceof \Illuminate\Pagination\LengthAwarePaginator && $estagiarios->hasPages())
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-muted">
                    @if($estagiarios->total() > 0)
                        Mostrando {{ $estagiarios->firstItem() }} a {{ $estagiarios->lastItem() }} de {{ $estagiarios->total() }} registos
                    @else
                        Nenhum registo encontrado
                    @endif
                </div>
                <nav>
                    {{ $estagiarios->links() }}
                </nav>
            </div>
            @endif
    </div>
</div>

<!-- Script para linhas clicáveis -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Tornar linhas clicáveis
    document.querySelectorAll('.clickable-row').forEach(function (row) {
        row.addEventListener('click', function (e) {
            // Não navegar se o clique for em elementos interativos
            if (e.target.closest('.action-cell') || 
                e.target.tagName === 'A' || 
                e.target.tagName === 'BUTTON' || 
                e.target.closest('form')) {
                return;
            }
            
            // Navegar para a página de detalhes
            window.location.href = this.dataset.href;
        });
    });

    // Efeito hover nas linhas
    document.querySelectorAll('.clickable-row').forEach(function (row) {
        row.addEventListener('mouseenter', function () {
            if (!this.classList.contains('table-active')) {
                this.style.backgroundColor = '#f8f9fa';
            }
        });
        
        row.addEventListener('mouseleave', function () {
            if (!this.classList.contains('table-active')) {
                this.style.backgroundColor = '';
            }
        });
    });
});
</script>

<style>
.clickable-row {
    cursor: pointer;
    transition: background-color 0.15s ease-in-out;
}

.clickable-row:hover {
    background-color: #f8f9fa !important;
}

.action-cell {
    pointer-events: auto;
}

.action-cell .btn-group {
    pointer-events: auto;
}

.table th {
    border-top: none;
    font-weight: 600;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.badge {
    font-size: 0.75rem;
    padding: 0.35em 0.65em;
}

.alert {
    border: none;
    border-radius: 0.75rem;
}

.btn-group .btn {
    border-radius: 0.375rem !important;
    margin: 0 2px;
}
</style>
@endsection