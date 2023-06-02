<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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
    return view('produtos.create');
});


// Rotas para o CRUD de produtos
Route::get("/produtos", [ProdutosController::class, "index"]);
Route::get("/produtos/create", [ProdutosController::class, "create"]);
Route::post("/produtos", [ProdutosController::class, "store"]);
Route::get("/produtos/{id}", [ProdutosController::class, "show"]);
Route::get("/produtos/{id}/edit", [ProdutosController::class, "edit"]);
Route::put("/produtos/{id}", [ProdutosController::class, "update"]);
Route::delete("/produtos/{id}", [ProdutosController::class, "destroy"]);

// Rotas para o CRUD de Usuario

// Rotas para o CRUD de Pedidos

// Rotas para o CRUD de Comprador

// Rotas para o CRUD de Vendedor

// Rotas para o CRUD de Fornecedor
