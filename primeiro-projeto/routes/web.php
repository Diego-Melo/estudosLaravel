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

use App\Http\Controllers\VeiculoController;

Route::get('/', [VeiculoController::class, 'index']);

Route::get('/veiculo/create', [VeiculoController::class, 'createView']);
Route::post('/veiculo', [VeiculoController::class, 'store']);
Route::put('/veiculo', [VeiculoController::class, 'edit']);
Route::delete('/veiculo', [VeiculoController::class, 'delete']);
Route::get('/veiculo', [VeiculoController::class, 'show']);

Route::get('/teste/{nome?}', function ($nome = "Diego") {
    return view('teste',['nome' => $nome]);
});

Route::get('/busca', function () {
    $busca = request('busca');
    return view('busca',['busca' => $busca]);
});

Route::get('/layout', function () {
    return view('layouts.main');
});


// Route::get('/', function () {
//     $nome = 'Maisa';
//     return view('welcome', ['nome'=>$nome]);
// });
