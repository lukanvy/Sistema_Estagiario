<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    // Lista todos os departamentos
    public function index()
    {
        // Recupera todos os departamentos do banco
        $departamentos = Departamento::all();

        // Retorna a view com os dados
        return view('departamentos.index', compact('departamentos'));
    }

    // Outros métodos opcionais para CRUD
    public function create()
    {
        return view('departamentos.create');
    }

    public function store(Request $request)
    {
        Departamento::create($request->all());
        return redirect()->route('departamento.index');
    }

    public function edit(Departamento $departamento)
    {
        return view('departamentos.edit', compact('departamento'));
    }

    public function update(Request $request, Departamento $departamento)
    {
        $departamento->update($request->all());
        return redirect()->route('departamento.index');
    }

    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamento.index');
    }
}
