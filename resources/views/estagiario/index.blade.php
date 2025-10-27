@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>📋 Lista de Estagiários</h3>
        <a href="{{ route('estagiario.create') }}" class="btn btn-primary">➕ Novo Estagiário</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>Nome Completo</th>
                <th>Curso</th>
                <th>Ano</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Supervisor</th>
                <th>Alocação</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estagiarios as $estagiario)
                <tr>
                    <td>{{ $estagiario->nome_completo }}</td>
                    <td>{{ $estagiario->curso }}</td>
                    <td>{{ $estagiario->ano }}</td>
                    <td>{{ $estagiario->email }}</td>
                    <td>{{ $estagiario->telefone }}</td>
                    <td>{{ $estagiario->supervisor }}</td>
                    <td>{{ $estagiario->alocacao }}</td>
                    <td>
                        @if($estagiario->status == 'Ativo')
                            <span class="badge bg-success">Ativo</span>
                        @else
                            <span class="badge bg-secondary">Encerrado</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('estagiario.editar', $estagiario->id) }}" class="btn btn-sm btn-warning">✏️ Editar</a>

                        @if($estagiario->status == 'Ativo')
                            <form action="{{ route('estagiario.encerrar', $estagiario->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-dark" onclick="return confirm('Deseja encerrar o estágio deste estagiário?')">⛔ Encerrar</button>
                            </form>
                        @endif

                        <form action="{{ route('estagiario.destroy', $estagiario->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja eliminar este estagiário?')" class="btn btn-sm btn-danger">🗑️ Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
