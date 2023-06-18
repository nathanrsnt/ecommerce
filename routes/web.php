<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\CarrinhosController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteUri;

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

// Rota para a página inicial
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotas para o CRUD de produtos
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProdutosController::class, 'store'])->name('produtos.store');
Route::get('/produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.show');
Route::get('/produtos/{id}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProdutosController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{id}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');

// Rotas para o CRUD de Pedidos
Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidosController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidosController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{id}', [PedidosController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/{id}/edit', [PedidosController::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{id}', [PedidosController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{id}', [PedidosController::class, 'destroy'])->name('pedidos.destroy');

// Rotas para o CRUD de Fornecedores
Route::get('/fornecedores', [FornecedoresController::class, 'index'])->name('fornecedores.index');
Route::get('/fornecedores/create', [FornecedoresController::class, 'create'])->name('fornecedores.create');
Route::post('/fornecedores', [FornecedoresController::class, 'store'])->name('fornecedores.store');
Route::get('/fornecedores/{id}', [FornecedoresController::class, 'show'])->name('fornecedores.show');
Route::get('/fornecedores/{id}/edit', [FornecedoresController::class, 'edit'])->name('fornecedores.edit');
Route::put('/fornecedores/{id}', [FornecedoresController::class, 'update'])->name('fornecedores.update');
Route::delete('/fornecedores/{id}', [FornecedoresController::class, 'destroy'])->name('fornecedores.destroy');

// Rotas para clientes
//* Essas rotas vao exibir as informacoes de cada cliente que o usuario (como vendedor) teve interações
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/fornecedores/{id}', [FornecedoresController::class, 'show'])->name('fornecedores.show');

// Rotas para vendedores
//* Essas rotas vao exibir as informacoes de cada vendedor que o usuario (como cliente) teve interações
Route::get('/vendedores', [VendedoresController::class, 'index'])->name('vendedores.index');
Route::get('/vendedores/{id}', [VendedoresController::class, 'show'])->name('vendedores.show');

// Rotas para pedidos
Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidosController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidosController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{id}', [PedidosController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/{id}/edit', [PedidosController::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{id}', [PedidosController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{id}', [PedidosController::class, 'destroy'])->name('pedidos.destroy');

// Rotas para carrinho
Route::get('/carrinho', [CarrinhosController::class, 'index'])->name('carrinho.index');
Route::get('/carrinho/store/{id}', [CarrinhosController::class, 'store'])->name('carrinho.store');
Route::delete('/carrinho/{id}', [CarrinhosController::class, 'destroy'])->name('carrinho.destroy');
Route::delete('/carrinho', [CarrinhosController::class, 'destroyAll'])->name('carrinho.destroyAll');

// Rota de autenticação
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});
