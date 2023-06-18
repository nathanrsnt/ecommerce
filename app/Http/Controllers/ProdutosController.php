<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create() {
        return view('produtos.create');
    }

    public function show($id) {
        $produto = Produto::findOrFail($id);

        if(isset($produto)) {
            return view('produtos.show', ['produto' => $produto]);
        } else {
            return redirect()->route('produtos.index')->with('msg', 'Produto não encontrado!');
        }
    }

    public function edit($id) {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function store(Request $request) {
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->categoria = $request->categoria;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->imagem = $request->imagem;

        if ($request->hasfile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();
            $imagemName = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImagem->move(public_path('img/produtos'), $imagemName);
            $produto->imagem = $imagemName;
        }

        $produto->save();

        return redirect()
        ->route('produtos.show', ['id' => $produto->id])
        ->with('msg', 'Produto criado com sucesso!');
    }

    public function update(Request $request, $id) {
        $produto = Produto::findOrFail($id);

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->categoria = $request->categoria;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->imagem = $request->imagem;

        if ($request->hasfile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();
            $imagemName = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImagem->move(public_path('img/produtos'), $imagemName);
            $produto->imagem = $imagemName;
        }

        $produto->update();
      
        return redirect()->route('produtos.index')->with('msg', 'Produto atualizado com sucesso!');
    }

    public function destroy($id) {
        Produto::findOrFail($id)->delete();
        return redirect()->route('produtos.index')->with('msg', 'Produto excluído com sucesso!');
    }

    public function search()
    {
        
    }
}
