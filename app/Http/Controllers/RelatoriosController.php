<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;

use Illuminate\Http\Request;

class RelatoriosController extends Controller
{
    public function produtosCategoria(Request $request)
    {
        $id = $request->input('categoria');
        $todasCategorias = Categoria::all();
        $todosProdutos = Produto::all();

        $categoria = Categoria::where('id', $id)->first();

        // Verificar se a categoria existe
        if ($categoria) {
            // Buscar os produtos da categoria pelo ID
            $produtos = Produto::where('categoria', $categoria->id)->get();

            return view('relatorios.categorias', ['produtosPorCategoria' => $produtos, 'categorias' => $todasCategorias]);
        } else {
            return view('relatorios.categorias', ['categorias' => $todasCategorias, 'produtosPorCategoria' => $todosProdutos]);
        }
    }
}


