<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

//routes/web.php
Route::get('/aluno', [AlunoController::class,"index"]);
//carrega o formulário
Route::get('/aluno/create', [AlunoController::class,"create"]);
//recebe os dados do formulário para ser salvo na função store
Route::post('/aluno', [AlunoController::class,"store"])->name('aluno.store');
//excluir os dados do formulário
Route::get('/aluno/destroy/($id)', [AlunoController::class,"destroy"])->name('aluno.destroy');
//busca no formulário
Route::post('/aluno/search', [AlunoController::class,"search"])->name('aluno.search');
