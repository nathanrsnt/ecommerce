@extends('layouts.main')

@section('title', 'KN Shop')

@section('content')
<div class="container">
    <h1 class="text-center" style="color: #9B349D; font-weight: bold">Produtos em Destaque</h1>
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-center" style="color: #9B349D;">Games</h2>
                </div>
                <div class="col-md-3">
                    <h3 class="text-center" style="color: #9B349D;">Consoles</h2>
                </div>
                <div class="col-md-3">
                    <h3 class="text-center" style="color: #9B349D;">Acessórios</h2>
                </div>
                <div class="col-md-3">
                    <h3 class="text-center" style="color: #9B349D;">Moda</h2>
                </div>
            </div>
            <hr>
        </div>
        @foreach ($produtos as $produto)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="/img/produtos/{{ $produto-> imagem }}" class="card-img-top" alt="Produto 3">
                <div class="card-body">
                    <h5 class="card-title">{{ $produto->nome }} </h5>
                    <p class="card-text">{{ $produto->descricao }}</p>
                    <p class="card-text"> {{ $produto->categoria }}</p>
                    <p class="card-text text-center" style="font-weight: bold;">R$ {{ $produto->preco }}</p>
                    <div class="text-center">
                        <a href="#" class="btn" style="background-color: #F5DB00; color: white; font-family: bold;"><i class="fa-solid fa-cart-shopping"></i></a>
                        <a href="#" class="btn" style="background-color: #F5DB00; color: white; font-family: bold;"> <i class="fa-solid fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <!-- Adicione aqui mais cards de produtos para a Categoria 1 -->
        </div>
        @endforeach
    </div>
</div>
@endsection
