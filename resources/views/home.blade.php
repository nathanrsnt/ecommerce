@extends('layouts.main')

@section('title', 'KN Shop')

@section('content')
<div class="container">
    <h1 class="text-center" style="color: #9B349D; font-weight: bold">Produtos em Destaque</h1>
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-center"><a href="" style="text-decoration: none; color: #9B349D;"> Jogos </a></h2>
                </div>
                <div class="col-md-3">
                    <h3 class="text-center"><a href="" style="text-decoration: none; color: #9B349D;"> Computadores </a></h2>
                </div>
                <div class="col-md-3">
                    <h3 class="text-center"><a href="" style="text-decoration: none; color: #9B349D;"> Acessórios </a></h2>
                </div>
                <div class="col-md-3">
                    <h3 class="text-center"><a href="" style="text-decoration: none; color: #9B349D;"> Moda </a></h2>
                </div>
            </div>
            <hr>
        </div>
        
            @foreach ($produtos as $produto)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="/img/produtos/{{ $produto->imagem }}" class="card-img-top" width="300" height="400" alt="{{ $produto->nome }}">
                    <h2 class="text-center" style="color: #9B349D;">{{ $produto->nome }}</h2>
                    <div class="card-body">
                        <p class="card-text"> Descrição: {{ $produto->descricao }}</p>
                        <p class="card-text"> Categoria: {{ $produto->categoria }}</p>
                        <p class="card-text text-center" style="font-weight: bold;">R$ {{ $produto->preco }}</p>
                        <div class="text-center">
                            <form action="{{ route('carrinho.store', $produto->id) }}">
                                @auth
                                <input class="input-form col-lg-2" name="quantidade" id="quantidade" type="text">
                                <button href="" class="btn" type="submit" style="background-color: #F5DB00; color: white; font-family: bold;"><i class="fa-solid fa-cart-shopping"></i></button>
                                @endauth
                                <a href="{{ route('produtos.show', $produto->id) }}" class="btn" style="background-color: #F5DB00; color: white; font-family: bold;"> <i class="fa-solid fa-eye"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Adicione aqui mais cards de produtos para a Categoria 1 -->
            </div>
            @endforeach
       
    </div>
</div>
@endsection
