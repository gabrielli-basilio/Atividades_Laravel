@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')
    <h1>Lista de Alunos</h1>

    @can('create', App\Models\Aluno::class)
        <a href="/alunos/create" class="btn-criar">+ Criar Aluno</a>
    @endcan

    @if(count($alunos) > 0)
        <ul>
            @foreach($alunos as $aluno)
                <li>{{ $aluno->nome }} - {{ $aluno->curso }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno cadastrado.</p>
    @endif
@endsection