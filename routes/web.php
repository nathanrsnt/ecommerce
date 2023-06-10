<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
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
Route::get('/', function () { return view('home'); })->name('home');

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

// Rotas para o CRUD de Comprador
Route::get('/comprador', [CompradorController::class, 'index'])->name('comprador.index');
Route::get('/comprador/create', [CompradorController::class, 'create'])->name('comprador.create');
Route::post('/comprador', [CompradorController::class, 'store'])->name('comprador.store');
Route::get('/comprador/{id}', [CompradorController::class, 'show'])->name('comprador.show');
Route::get('/comprador/{id}/edit', [CompradorController::class, 'edit'])->name('comprador.edit');
Route::put('/comprador/{id}', [CompradorController::class, 'update'])->name('comprador.update');
Route::delete('/comprador/{id}', [CompradorController::class, 'destroy'])->name('comprador.destroy');

// Rotas para o CRUD de Vendedor
Route::get('/vendedor', [VendedorController::class, 'index'])->name('vendedor.index');
Route::get('/vendedor/create', [VendedorController::class, 'create'])->name('vendedor.create');
Route::post('/vendedor', [VendedorController::class, 'store'])->name('vendedor.store');
Route::get('/vendedor/{id}', [VendedorController::class, 'show'])->name('vendedor.show');
Route::get('/vendedor/{id}/edit', [VendedorController::class, 'edit'])->name('vendedor.edit');
Route::put('/vendedor/{id}', [VendedorController::class, 'update'])->name('vendedor.update');
Route::delete('/vendedor/{id}', [VendedorController::class, 'destroy'])->name('vendedor.destroy');

// Rotas para o CRUD de Fornecedor
Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('fornecedor.index');
Route::get('/fornecedor/create', [FornecedorController::class, 'create'])->name('fornecedor.create');
Route::post('/fornecedor', [FornecedorController::class, 'store'])->name('fornecedor.store');
Route::get('/fornecedor/{id}', [FornecedorController::class, 'show'])->name('fornecedor.show');
Route::get('/fornecedor/{id}/edit', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
Route::put('/fornecedor/{id}', [FornecedorController::class, 'update'])->name('fornecedor.update');
Route::delete('/fornecedor/{id}', [FornecedorController::class, 'destroy'])->name('fornecedor.destroy');

// Rotas para o CRUD de Usuario

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
