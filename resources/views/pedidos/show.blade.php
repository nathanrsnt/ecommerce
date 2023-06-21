@extends('layouts.main')

@section('title', 'Produtos do Pedido')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-lg-8 mt-3">
                <div class="card-body">
                    <h1 style="color: #9B349D; font-weight: bold;">Produtos do Pedido</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nome do Produto</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td>{{ $produto->nome }}</td>
                                    <td>R$ {{ $produto->preco }}</td>
                                    <td>{{ $produto->quantidade }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('pedidos.index') }}" class="btn" style="background-color: #9B349D; color: white;">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
