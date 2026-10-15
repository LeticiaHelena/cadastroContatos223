<?php

use App\Http\Controllers\ContatoController;
use App\Models\Contato;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () { 
    return 'Minha primeira aplicação Laravel está no ar!'; 
});

//Rota GET, exibe o formulário e lista de contatos
Route::get('/', [ContatoController::class, 'index']);

//Rota POST, recebe os dados do formulário
Route::post('/save', [ContatoController::class, 'form']);