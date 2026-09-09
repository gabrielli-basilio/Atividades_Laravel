<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index() {
        
        // $alunos = ['Ana', 'Bruno', 'Carla'];
        $alunos = Aluno::all();
        return view('alunos.index', ['alunos' => $alunos]);
    }

    public function show($id) {
        $aluno = Aluno::find($id);
        return view('alunos.show', ['aluno' => $aluno]);
    }

    public function create() {
        return view('alunos.create');
    }

    public function store(Request $request) {
        Aluno::create([
            'nome' => $request->nome,
            'curso' => $request->curso,
        ]);

        return redirect('/alunos');
    }

    public function edit($id) {
        $aluno = Aluno::find($id);
        return view('alunos.edit', ['aluno' => $aluno]);
    }

    public function update(Request $request, $id) {
        $aluno = Aluno::find($id);
        $aluno->update([
            'nome' => $request->nome,
            'curso' => $request->curso,
        ]);

        return redirect('/alunos');
    }

    public function destroy($id) {
        Aluno::destroy($id);
        return redirect('/alunos');
    }

// ------ ATIVIDADE 11 ------

    public function consultas() {
        // Alunos de um determinado curso
        $porCurso = Aluno::where('curso', 'Engenharia de Software')->get();

        // Alunos cujo nome contém determinada palavra
        $porNome = Aluno::where('nome', 'like', '%Ana%')->get();

        // Alunos cadastrados recentemente
        $recentes = Aluno::where('created_at', '>=', now()->subDays(7))->get();

        // Quantidade de alunos
        $total = Aluno::count();

        return view('alunos.consultas', [
            'porCurso' => $porCurso,
            'porNome' => $porNome,
            'recentes' => $recentes,
            'total' => $total,
        ]);
    }
}