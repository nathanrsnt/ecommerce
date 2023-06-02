<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        return view('produtos.index');
    }

    public function create() {
        return view('produtos.create');
    }

    public function show($id) {
        return view('produtos.show', ['id' => $id]);
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
        return redirect()->route('produtos.show', ['id' => $id]);
    }

    public function destroy($id) {
        return redirect()->route('produtos.index');
    }
}
