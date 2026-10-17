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

//Rota DELETE, remove o dado já salvo no banco
Route::delete('/delete/{id}', [ContatoController::class, 'delete']);

//Traz os dados do id que será alterado
Route::get('/editar/{id}', [ContatoController::class, 'edit']);

//Rota PUT recebe os dados alterados e atualiza no banco
Route::put('/update/{id}', [ContatoController::class, 'update']);