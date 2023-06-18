@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="" style="color: #9B349D; font-weight: bold">Seus Produtos</h1>
            </div>
            <div class="col-lg-6 text-end">
                <a href="{{ route('produtos.create') }}" class="btn mt-2 mb-2" style="background-color: #F5DB00; color: white; font-weight: bold;"><i class="fa-solid fa-plus"></i></a>
            </div>
            @if($produtos->count() == 0)
            <h2 class="text-center mt-5" style="color: black; font-weight: bold">Você ainda não possui produtos cadastrados</h2>
            @else
            @foreach ($produtos as $produto)
            <div class="col-md-4 mt-2">
                <div class="card mb-3"> 
                    <img src="/img/produtos/{{ $produto->imagem }}" class="card-img-top" width="300" height="400" alt="{{ $produto->nome }}">
                    <h2 class="text-center" style="color: #9B349D;">{{ $produto->nome }}</h2>
                    <div class="card-body">
                        <p class="card-text">Descrição: {{ $produto->descricao }}</p>
                        <p class="card-text">Categoria: {{ $produto->categoria }}</p>
                        <p class="card-text text-center" style="font-weight: bold;">R$ {{ $produto->preco }}</p>
                        <div class="text-center">
                            <a href="{{ route('produtos.show', $produto->id) }}" class="btn d-inline-block me-2" style="background-color: #F5DB00; color: white; font-family: bold;"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn d-inline-block me-2" style="background-color: #F5DB00; color: white; font-family: bold;"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="background-color: #F5DB00; color: white; font-family: bold;"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>  
    </div>
@endsection