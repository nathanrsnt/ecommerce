@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Produtos</h1>
            </div>
            <div class="col-lg-2">
                <a href="{{ route('produtos.create') }}" class="btn btn-primary">Novo Produto</a>
            </div>
        </div>
        <div class="row">
        @foreach ($produtos as $produto)
            <div class="card col-lg-4 mt-2">
                <div class="card-body"> 
                    <h1>{{ $produto->nome }}</h1>
                    <p>{{ $produto->descricao }}</p>
                    <p>R$ {{ $produto->preco }}</p>
                    <div class="col-lg-2">
                        <img src="" alt="" class="img-fluid">
                    </div>
                    <div class="d-flex mx-auto">
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-primary me-2">Detalhes</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning me-2">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger me-2">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection