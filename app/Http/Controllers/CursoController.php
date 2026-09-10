<?php

namespace App\Http\Controllers;

use App\Models\Curso;

class CursoController extends Controller
{
    public function listaCursos() {
        $cursos = Curso::all();
        return view('cursos.index', ['cursos' => $cursos]);
    }

    public function alunosPorCurso($id) {
        $curso = Curso::find($id);
        return view('cursos.alunos', ['curso' => $curso]);
    }
}