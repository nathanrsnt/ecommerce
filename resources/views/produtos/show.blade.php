@extends('layouts.main')

@section('title', 'Detalhes do Produto')

@section('content')
<div class="container">
    <div class="cel d-flex justify-content-center text-center">
        <div class="card col-lg-6 mt-3">
            <div class="card-body">
                <div class="col">
                    <h1>Produto: {{ $produto->nome }}</h1>
                    <p>Descrição: {{ $produto->descricao }}</p>
                    <p>Categoria: {{ $produto->categoria }}</p>
                    <p>Preço: {{ $produto->preco }}</p>
                    <p>Quantidade: {{ $produto->quantidade }}</p>
                    <p>Imagem: {{ $produto->imagem }}</p>
                    <p>Criado em: {{ $produto->created_at }}</p>
                    <p>Atualizado em: {{ $produto->updated_at }}</p>
                    <a class="button btn btn-primary" href="{{ route('produtos.store') }}">Voltar</a>
                    <a class="button btn btn-warning" href="{{ route('produtos.edit', $produto->id)}}">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
