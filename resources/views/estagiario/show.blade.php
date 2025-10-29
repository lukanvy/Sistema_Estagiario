@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6 mt-10">
    <h2 class="text-2xl font-bold mb-4 text-gray-700">Detalhes do Estagiário</h2>

    <table class="table-auto w-full text-left border-collapse">
        <tr>
            <th class="p-2">Nome Completo</th>
            <td class="p-2">{{ $estagiario->nome_completo }}</td>
        </tr>
        <tr>
            <th class="p-2">Curso</th>
            <td class="p-2">{{ $estagiario->curso }}</td>
        </tr>
        <tr>
            <th class="p-2">Ano</th>
            <td class="p-2">{{ $estagiario->ano }}</td>
        </tr>
        <tr>
            <th class="p-2">Email</th>
            <td class="p-2">{{ $estagiario->email }}</td>
        </tr>
        <tr>
            <th class="p-2">Telefone</th>
            <td class="p-2">{{ $estagiario->telefone }}</td>
        </tr>
        <tr>
            <th class="p-2">Supervisor</th>
            <td class="p-2">{{ $estagiario->supervisor }}</td>
        </tr>
        <tr>
            <th class="p-2">Alocação</th>
            <td class="p-2">{{ $estagiario->alocacao }}</td>
        </tr>
        <tr>
            <th class="p-2">Status</th>
            <td class="p-2">{{ $estagiario->status }}</td>
        </tr>
    </table>

    <div class="mt-6 text-right">
        <a href="{{ route('estagiario.index'  ) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Voltar</a>
    </div>
</div>
@endsection
