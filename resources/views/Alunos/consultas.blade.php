@extends('layouts.app')

@section('title', 'Consultas de Alunos')

@section('content')
    <h1>Consultas de Alunos</h1>

    <h2>Total de alunos: {{ $total }}</h2>

    <h2>Alunos de Engenharia de Software</h2>
    @if(count($porCurso) > 0)
        <ul>
            @foreach($porCurso as $aluno)
                <li>{{ $aluno->nome }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno encontrado.</p>
    @endif

    <h2>Alunos com "Ana" no nome</h2>
    @if(count($porNome) > 0)
        <ul>
            @foreach($porNome as $aluno)
                <li>{{ $aluno->nome }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno encontrado.</p>
    @endif

    <h2>Cadastrados nos últimos 7 dias</h2>
    @if(count($recentes) > 0)
        <ul>
            @foreach($recentes as $aluno)
                <li>{{ $aluno->nome }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno encontrado.</p>
    @endif
@endsection