@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>📜 Histórico de Estagiários Encerrados</h3>
        <a href="{{ route('estagiario.index') }}" class="btn btn-secondary">⬅️ Voltar</a>
    </div>

    @if ($estagiarios->isEmpty())
        <div class="alert alert-info">Nenhum estágio encerrado até o momento.</div>
    @else
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
                    <th>Data de Início</th>
                    <th>Data de Fim</th>
                    <th>Carta</th>
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
                        <td>{{ \Carbon\Carbon::parse($estagiario->data_inicio)->format('d/m/Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($estagiario->data_fim)->format('d/m/Y') }}</td>
                        <td>
                            @if ($estagiario->carta)
                                <a href="{{ asset('storage/' . $estagiario->carta) }}" target="_blank" class="btn btn-sm btn-outline-primary">📎 Ver Carta</a>
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
