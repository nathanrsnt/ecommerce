<?php

namespace App\Http\Controllers;
use App\Models\Carrinho;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhosController extends Controller
{
    public function index() {
        $produtosCarrinho = Carrinho::all();

        if(isset($produtosCarrinho)) {
            return view('carrinhos.index', ['produtosCarrinho' => $produtosCarrinho]);
        } else {
            return redirect()->route('home')->with('error', 'Algo deu errado!');
        }
    }

    public function store($idProduto) {
        $carrinho = new Carrinho();
        $produtosCarrinho = Produto::find($idProduto);
        $quantidade = request('quantidade');
        
        $carrinho->produto_id = $produtosCarrinho->id;
        $carrinho->nome = $produtosCarrinho->nome;
        $carrinho->descricao = $produtosCarrinho->descricao;
        $carrinho->categoria = $produtosCarrinho->categoria;
        $carrinho->preco = $produtosCarrinho->preco;
        $carrinho->usuario = Auth::user()->id;

        $carrinho->quantidade = $quantidade;
        //total do produto sendo adicionado ao carrinho
        $carrinho->total = $produtosCarrinho->preco * $quantidade;

        $carrinho->save();

        return redirect()->route('carrinho.index')->with('success', 'Produto adicionado ao carrinho com sucesso!');
    }

    public function destroy($id) {
        $produtoCarrinho = Carrinho::find($id);
        $produtoCarrinho->delete();

        return redirect()->route('carrinho.index')->with('success', 'Produto removido do carrinho com sucesso!');
    }

    public function destroyAll() {
        $produtoCarrinho = Carrinho::all();
        $produtoCarrinho->each->delete();

        return redirect()->route('carrinho.index')->with('success', 'Todos os produtos foram removidos do carrinho com sucesso!');
    }
}
