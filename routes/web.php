<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

// ------ ProdutoController
Route::get('/produto', [ProdutoController::class, 'index']);
Route::get('/produto/novo', [ProdutoController::class, 'create']);
Route::post('/produto/salvar', [ProdutoController::class, 'store']);
Route::get('/produto/editar/{id}', [ProdutoController::class, 'edit']);
Route::post('/produto/gravar/{id}', [ProdutoController::class, 'update']);
Route::get('/produto/apagar/{id}', [ProdutoController::class, 'destroy']);
Route::get('/produto/{id}', [ProdutoController::class, 'show']);
