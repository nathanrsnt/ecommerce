@extends('layouts.main')

@section('title', 'Novo Produto')

@section('content')
    <div class="container">
        <div class="cel d-flex justify-content-center text-center">
            <div class="card col-lg-6 mt-3">
                <div class="card-body">
                    <div class="col">
                        <h1>Criar Produto</h1>
                        <div class="col-lg-8 mx-auto">
                            <form action="{{ route('produtos.store') }}" method="post">
                                @csrf
                                <label for=""></label>
                                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Produto">
                                <label for=""></label>
                                <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição do Produto">
                                <label for=""></label>
                                <input class="form-control" type="number" name="preco" id="preco" placeholder="Preço">
                                <label for=""></label>
                                <input class="form-control" type="number" name="quantidade" id="quantidade" placeholder="Quantidade">
                                <label for=""></label>
                                <input class="form-control" type="file" name="imagem" id="imagem" placeholder="Imagem">
                                <input class="btn btn-success mt-3" type="submit" value="Salvar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection