@extends('layouts.main')

@section('title', 'Editar Produto')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar Produto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <form action="{{ route('produtos.update', $id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <label for="">Nome do Produto</label>
                    <input type="text" name="nome" id="nome">
                    <label for="">Descrição</label>
                    <input type="text" name="descricao" id="descricao">
                    <label for="">Preço</label>
                    <input type="text" name="preco" id="preco">
                    <label for="">Quantidade</label>
                    <input type="text" name="quantidade" id="quantidade">
                    <label for="">Imagem</label>
                    <input type="text" name="imagem" id="imagem">
                    <input type="submit" value="Salvar">
                </form>
            </div>
        </div>
    </div>
@endsection