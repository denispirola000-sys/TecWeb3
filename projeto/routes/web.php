<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItemVendaController;
use App\Http\Controllers\UserController;

Route::resource('clientes', ClienteController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('vendas', VendaController::class);
Route::resource('itens', ItemVendaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', [ClienteController::class, 'index']);

Route::get('/novo', function(){
    return view('novo');
});

Route::get('/usuarios', [UserController::class, 'index']);

require __DIR__.'/settings.php';