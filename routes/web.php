<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Pagina de informações';
});

Route::get('/alunos', function () {
    return 'Pagina de Alunos';
});

Route::get('/contato', function () {
    return 'Pagina de Contato';
});

Route::get('/produto/{id}', function ($id) {
    return "Número do produto: $id";
});

Route::get('/categoria/{id}', function ($id) {
    return "Número da categoria: $id";
});

Route::get('/usuario/{id}', function ($id) {
    return "Número do usuário: $id";
});