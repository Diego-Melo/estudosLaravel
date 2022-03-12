<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste/{nome?}', function ($nome = "Diego") {
    return view('teste',['nome' => $nome]);
});

Route::get('/busca', function () {
    $busca = request('busca');
    return view('busca',['busca' => $busca]);
});

// Route::get('/', function () {
//     $nome = 'Maisa';
//     return view('welcome', ['nome'=>$nome]);
// });
