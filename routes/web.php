<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () { 
    return 'Minha primeira aplicação Laravel está no ar!'; 
});