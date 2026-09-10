@extends('layouts.app')

@section('title', 'Alunos do Curso')

@section('content')
    <h1>Alunos do curso: {{ $curso->nome }}</h1>

    @if(count($curso->alunos) > 0)
        <ul>
            @foreach($curso->alunos as $aluno)
                <li>{{ $aluno->nome }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno matriculado neste curso.</p>
    @endif
@endsection