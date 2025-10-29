<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estagiario;

class EstagiarioController extends Controller
{
    /**
     * Lista todos os estagiários.
     */
    public function index()
    {
        $estagiarios = Estagiario::all();
        return view('estagiario.index', compact('estagiarios'));
    }
    public function historico()
{
    $estagiarios = Estagiario::where('status', 'Encerrado')->get();
    return view('estagiario.historico', compact('estagiarios'));
}

    /**
    * formulário de cadastro
     */
    public function create()
    {
        return view('estagiario.create');
    }

    /**
     * Salva um novo estagiário na bd.
     */
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
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'observacoes' => 'nullable|string',
            'carta' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            
        ]);

        Estagiario::create($validated);

        return redirect()->route('estagiario.index')->with('success', 'Estagiário cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $estagiario = Estagiario::findOrFail($id);
        return view('estagiario.editar', compact('estagiario'));
    }

    /**
     * Atualiza os dados do estagiário bd.
     */
    public function update(Request $request, $id)
    {
        $estagiario = Estagiario::findOrFail($id);

        $validated = $request->validate([
            'nome_completo' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'ano' => 'required|integer',
            'email' => 'required|email|max:255|unique:estagiarios,email,' . $estagiario->id,
            'telefone' => 'required|string|max:50',
            'supervisor' => 'required|string|max:255',
            'alocacao' => 'required|string|max:255',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'observacoes' => 'nullable|string',
            'carta' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            
        ]);

        $estagiario->update($validated);

        return redirect()->route('estagiario.index')->with('success', 'Estagiário atualizado com sucesso!');
    }

    /**
     * Remove um estagiário do bd.
     */
    public function destroy($id)
    {
        $estagiario = Estagiario::findOrFail($id);
        $estagiario->delete();

        return redirect()->route('estagiario.index')->with('success', 'Estagiário removido com sucesso!');
    }
    public function encerrar($id)
{
    $estagiario = Estagiario::findOrFail($id);
    $estagiario->status = 'Encerrado';
    $estagiario->save();

    return redirect()->route('estagiario.index')->with('success', 'Estágio encerrado com sucesso!');
}
public function dashboard()
{
    $totalEstagiariosAtivos = \App\Models\Estagiario::where('status', 'Ativo')->count();
    $totalSupervisores = \App\Models\Supervisor::count(); // se tiver a tabela 'supervisores'
    $totalEncerrados = \App\Models\Estagiario::where('status', 'Encerrado')->count();

    return view('dashboard', compact('totalEstagiariosAtivos', 'totalSupervisores', 'totalEncerrados'));
}
public function show($id)
{
    $estagiario = Estagiario::findOrFail($id);
    return view('estagiario.show', compact('estagiario'));
}



}
