<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', ['fornecedores' => $fornecedores]);
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function show($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);

        if (isset($fornecedor)) {
            return view('fornecedores.show', ['fornecedor' => $fornecedor]);
        } else {
            return redirect()->route('fornecedores.index')->with('msg', 'Fornecedor não encontrado!');
        }
    }

    public function edit($id)
    {
        return view('fornecedores.edit', ['id' => $id]);
    }

    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();

        $fornecedor->nome = $request->nome;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->email = $request->email;

        $fornecedor->save();

        return redirect()
            ->route('fornecedores.show', ['id' => $fornecedor->id])
            ->with('msg', 'Fornecedor criado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);

        $fornecedor->nome = $request->nome;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->email = $request->email;

        $fornecedor->update();

        return redirect()->route('fornecedores.index')->with('msg', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Fornecedor::findOrFail($id)->delete();
        return redirect()->route('fornecedores.index')->with('msg', 'Fornecedor excluído com sucesso!');
    }

    public function search(Request $request)
    {
        // Lógica para pesquisar fornecedores
    }
}
