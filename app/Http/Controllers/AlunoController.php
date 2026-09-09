<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index() {
        $alunos = ['Ana', 'Bruno', 'Carla'];
        return view('alunos.index', ['alunos' => $alunos]);
    }

    public function show($id) {
        return view('alunos.show', ['id' => $id]);
    }

    public function create() {
        return view('alunos.create');
    }

    public function store() {

    }

    public function edit() {
        return view('alunos.edit');
    }

    public function update() {

    }

    public function destroy() {

    }

// ------ ATIVIDADE 11 ------

    public function consultas() {
        // Alunos de um determinado curso
        $porCurso = Aluno::where('curso', 'Engenharia')->get();

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