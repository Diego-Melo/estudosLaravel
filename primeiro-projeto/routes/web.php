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

Route::get('/', [VeiculoController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [VeiculoController::class, 'index'])->middleware('auth');
Route::get('/layout', [VeiculoController::class, 'layout'])->middleware('auth');

// Views Veiculos
Route::get('/veiculo/create', [VeiculoController::class, 'createView'])->middleware('auth');
Route::get('/veiculo', [VeiculoController::class, 'show'])->middleware('auth');
Route::get('/veiculo/edit/{id}', [VeiculoController::class, 'edit'])->middleware('auth');

Route::delete('/veiculo/{id}', [VeiculoController::class, 'destroy']);
Route::post('/veiculo', [VeiculoController::class, 'store']);
Route::put('/veiculo/update', [VeiculoController::class, 'update']);


// Route::get('/', function () {
//     $nome = 'Maisa';
//     return view('welcome', ['nome'=>$nome]);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
