<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}