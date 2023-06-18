@extends('layouts.main')

@section('title', 'Novo Produto')

@section('content')
    <div class="container">
        <div class="cel d-flex justify-content-center text-center">
            <div class="card col-lg-6 mt-3">
                <div class="card-body">
                    <div class="col">
                        <h1 style="color: #9B349D; font-weight: bold;">Novo Produto</h1>
                        <div class="col-lg-8 mx-auto">
                            <form action="{{ route('produtos.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for=""></label>
                                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Produto">
                                <label for=""></label>
                                <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição do Produto">
                                <label for=""></label>
                                <input class="form-control" type="text" name="categoria" id="categoria" placeholder="Categoria do Produto">
                                <label for=""></label>
                                <input class="form-control" type="text" name="preco" id="preco" placeholder="Preço">
                                <label for=""></label>
                                <input class="form-control" type="number" name="quantidade" id="quantidade" placeholder="Quantidade">
                                <label for="imagem"></label>
                                <input class="form-control" type="file" name="imagem" id="imagem" placeholder="Imagem">
                                <button class="btn mt-3" type="submit" style="background-color: #9B349D; color: white;">Salvar</button>
                                <a href="{{ route('produtos.index') }}" class="btn mt-3">Voltar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection