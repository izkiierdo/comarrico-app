<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {
    return view('layout/.principal');
});

Route::get('pedidos', [PedidoController::class, 'index']);

Route::get('pedidos/create', [PedidoController::class, 'create']);

Route::get('pedidos/{id}', [PedidoController::class, 'show']);

Route::post('pedidos', [PedidoController::class, 'store']);

Route::get('pedidos/{id}/edit', [PedidoController::class, 'edit']);

Route::put('pedidos/{id}', [PedidoController::class, 'update']);

Route::delete('pedidos/{id}', [PedidoController::class, 'destroy']);

Route::get('usuarios', [UsuarioController::class, 'index']);
 
Route::resource('clientes', ClienteController::class);