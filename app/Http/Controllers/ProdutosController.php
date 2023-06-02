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
        return view('produtos.edit', ['id' => $id]);
    }

    public function store(Request $request) {
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->imagem = $request->imagem;

        if ($request->hasfile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/produtos'), $imageName);
            $produto->imagem = $imageName;
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
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->imagem = $request->imagem;

        if ($request->hasfile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/produtos'), $imageName);
            $produto->imagem = $imageName;
        }

        $produto->update();
      
        return redirect()->route('produtos.show', ['id' => $id]);
    }

    public function destroy($id) {
        Produto::findOrFail($id)->delete();
        return redirect()->route('produtos.index')->with('msg', 'Produto excluído com sucesso!');
    }
}
