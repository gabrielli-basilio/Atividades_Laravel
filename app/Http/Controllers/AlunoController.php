<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() {
        return view('alunos.index');
    }

    public function show(){
        return view('alunos.show');
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