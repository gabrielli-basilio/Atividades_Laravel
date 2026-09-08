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