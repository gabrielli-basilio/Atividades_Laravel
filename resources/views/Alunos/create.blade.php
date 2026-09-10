@extends('layouts.app')

@section('title', 'Criar Aluno')

@section('content')
    <h1>Criar Aluno</h1>

    @if ($errors->any())
        <ul class="erros">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/alunos" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}">

        <label>Curso:</label>
        <select name="curso_id">
            <option value="">Selecione um curso</option>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>
                    {{ $curso->nome }}
                </option>
            @endforeach
        </select>

        <button type="submit">Salvar</button>
    </form>
@endsection