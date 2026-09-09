<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('home');
});

/* Route::get('/sobre', function () {
    return 'Pagina de informações';
});

Route::get('/alunos', function () {
    return 'Pagina de Alunos';
});

Route::get('/contato', function () {
    return 'Pagina de Contato';
}); */

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
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

// Rotas CRUD para Alunos
Route::get('/alunos', [
    AlunoController::class, 'index'
]);

Route::get('/alunos/create', [
    AlunoController::class, 'create'
]);

// Rota para consultas específicas de alunos
Route::get('/alunos/consultas', [
    AlunoController::class, 'consultas'
]);

Route::get('/alunos/{id}', [
    AlunoController::class, 'show'
]);

Route::get('/alunos/{id}/edit', [
    AlunoController::class, 'edit'
]);

Route::post('/alunos', [
    AlunoController::class, 'store'
]);

Route::put('/alunos/{id}', [
    AlunoController::class, 'update'
]);

Route::delete('/alunos/{id}', [
    AlunoController::class, 'destroy'
]);