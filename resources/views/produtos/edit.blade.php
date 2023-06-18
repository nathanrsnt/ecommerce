@extends('layouts.main')

@section('title', 'Editar Produto')

@section('content')

<div class="container">
    <div class="cel d-flex justify-content-center text-center">
        <div class="card col-lg-6 mt-3">
            <div class="card-body">
                <div class="col">
                    <h1 style="color: #9B349D; font-weight: bold;">Editar Produto</h1>
                    <div class="col-lg-8 mx-auto">
                        <form action="{{ route('produtos.update', $produto->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label for=""></label>
                            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Produto" value="{{ $produto->nome }}">
                            <label for=""></label>
                            <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição do Produto" value="{{ $produto->descricao }}">
                            <label for=""></label>
                            <input class="form-control" type="text" name="categoria" id="categoria" placeholder="Categoria do Produto" value="{{ $produto->categoria }}">
                            <label for=""></label>
                            <input class="form-control" type="text" name="preco" id="preco" placeholder="Preço" value="{{ $produto->preco }}">
                            <label for=""></label>
                            <input class="form-control" type="number" name="quantidade" id="quantidade" placeholder="Quantidade" value="{{ $produto->quantidade }}">
                            <label for="imagem"></label>
                            <input class="form-control" type="file" name="imagem" id="imagem" value="{{ $produto->imagem }}">
                            <input class="btn mt-3" type="submit" value="Salvar" style="background-color: #9B349D; color: white;">
                            <a href="{{ route('produtos.index') }}" class="btn">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
