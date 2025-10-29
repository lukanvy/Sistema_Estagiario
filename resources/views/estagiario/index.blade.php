@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3> Lista de Estagiários</h3>
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
            @foreach ($estagiarios as $e)
    <tr onclick="window.location='{{ route('estagiario.show', $e->id) }}'" class="cursor-pointer hover:bg-gray-100">
    <td>{{ $e->nome_completo }}</td>
    <td>{{ $e->curso }}</td>
    <td>{{ $e->ano }}</td>
    <td>{{ $e->email }}</td>
    <td>{{ $e->telefone }}</td>
    <td>{{ $e->supervisor }}</td>
    <td>{{ $e->alocacao }}</td>
    <td>{{ $e->status }}</td>
  <td>
    <a href="{{ route('estagiarios.edit', $e->id) }}" class="btn btn-warning btn-sm">Editar</a>
    <form action="{{ route('estagiario.destroy', $e->id) }}" method="POST" style="display:inline">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
    </form>
  </td>
</tr>
@endforeach

        </tbody>
    </table>
</div>
@endsection
