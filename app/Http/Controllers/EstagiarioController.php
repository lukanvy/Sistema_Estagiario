<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estagiario;

class EstagiarioController extends Controller
{
   
    public function index()
    {
        $estagiarios = Estagiario::all(); 
        return view('estagiario.index', compact('estagiarios'));
    }

    public function create()
    {
        return view('estagiario.create');
    }

   
    public function store(Request $request)
    {
   
        $validated = $request->validate([
            'nome_completo' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'ano' => 'required|integer',
            'email' => 'required|email|max:255|unique:estagiarios,email',
            'telefone' => 'required|string|max:50',
            'supervisor' => 'required|string|max:255',
            'alocacao' => 'required|string|max:255',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date',
            'observacoes' => 'nullable|string',
        ]);

        Estagiario::create($validated);

        return redirect()->route('estagiario.index')->with('success', 'Estagiário cadastrado com sucesso!');
    }
}
