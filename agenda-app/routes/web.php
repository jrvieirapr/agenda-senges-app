<?php

use Illuminate\Support\Facades\Route;
// Importar o controller
use App\Http\Controllers\EventoController;

//Escolher o tipo de retorno, resource,
//get, post, put, delete,any
//Route::resource('rota',ModeloController::class);-
//Route::get('rota',[ModeloController::class, 'index']);
//Nao esquecer de importar o controller

Route::get('/', function(){
    return redirect()->away('/eventos');
});

//php artisan route:list
Route::resource('eventos', EventoController::class);


