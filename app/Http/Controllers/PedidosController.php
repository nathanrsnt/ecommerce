<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Carrinho;
use App\Models\ProdutoPedido;
use App\Models\Produto;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $pedidos = Pedido::where('usuario', $user->id)->get();

        return view('pedidos.index', ['pedidos' => $pedidos]);
    }

    public function store()
    {
        $produtos = Carrinho::all();

        //recebe total do request
        $total = request('total');
        $quantidade = 0;

        // Forma o pedido e salva no banco
        $pedido = new Pedido();
        $pedido->quantidade = $quantidade;
        $pedido->total = $total;
        $pedido->nome_cliente = Auth::user()->name;
        $pedido->usuario = Auth::user()->id;
        $pedido->save();


        $pedido_id = $pedido->id;

        // Armazena os produtos do pedido na tabela de produtos do pedido
        foreach ($produtos as $produto) {
            $produtosPedido = new ProdutoPedido();
            $produtosPedido->pedido_id = $pedido_id;
            $produtosPedido->produto_id = $produto->produto_id;
            $produtosPedido->nome = $produto->nome;
            $produtosPedido->categoria = $produto->categoria;
            $produtosPedido->preco = $produto->preco;
            $produtosPedido->quantidade = $produto->quantidade;
            $produtosPedido->total = $total;
            $produtosPedido->nome_cliente = Auth::user()->name;
            $quantidade = $quantidade + $produto->quantidade;
            $produtosPedido->save();

            // Deduz o item do estoque
            $estoque = Produto::findOrFail($produto->produto_id);
            $estoque->quantidade = $estoque->quantidade - $produto->quantidade;
            $estoque->save();
        }
        
        // Limpa o carrinho
        $produtos->each->delete();

        return redirect()->route('pedidos.index');
    }

    public function show($id) {
        $produtosPedido = ProdutoPedido::where('pedido_id', $id)->get();

        return view('pedidos.show', ['produtos' => $produtosPedido]);   
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);

        $produtosPedido = ProdutoPedido::where('pedido_id', $id)->get();
        $produtosPedido->each->delete();
        $pedido->delete();

        return redirect()->route('pedidos.index');
    }
}
