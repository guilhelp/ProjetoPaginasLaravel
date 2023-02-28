<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // Criando rotas para acessar as páginas
    return view('home');
});
Route::get('/produtos', function () {  // Criando rotas para acessar as páginas
    return view('produtos');
});
Route::get('/empresa', function () { // Criando rotas para acessar as páginas
    return view('empresa');
});
Route::get('/contato', function () { // Criando rotas para acessar as páginas
    return view('contato');
});

