@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
    <h1>Cursos</h1>

    @if(count($cursos) > 0)
        <ul>
            @foreach($cursos as $curso)
                <li>
                    <a href="/cursos/{{ $curso->id }}/alunos">{{ $curso->nome }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum curso cadastrado.</p>
    @endif
@endsection