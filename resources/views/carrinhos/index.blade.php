@extends('layouts.main')

@section('title', 'Carrinho')

@section('content')
<div class="container mt-5">
        <h1 class="mb-4" style="font-weight: bold; color: #9B349D;">Meu Carrinho</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Total</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            @php $total = 0; @endphp
            @if (isset ($produtosCarrinho))
                @if ($produtosCarrinho->count() == 0)
                <tbody>
                    <tr>
                        <td colspan="4" class="text-center">Não há produtos no carrinho</td>
                    </tr>
                </tbody>
                @else
                    @foreach ($produtosCarrinho as $produtoCarrinho)
                    <tbody>
                        <tr>
                            <td>{{ $produtoCarrinho->nome }}</td>
                            <td>R$ {{ $produtoCarrinho->preco }}</td>
                            <td>{{ $produtoCarrinho->quantidade }}</td>
                            <td>R$ {{ $produtoCarrinho->total }}</td>
                            <td>
                                <form action="{{ route('carrinho.destroy', $produtoCarrinho->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn" style="color: #9B349D;"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @php
                        $total += $produtoCarrinho->total;
                    @endphp
                    @endforeach
                @endif
            @endif
        </table>
        <div class="row">
            <h4>Total: R$ {{ $total }}</h4>
            <div class="col-lg-2 mt-3">
                <a href="{{ route('home')}}" class="btn" style="background-color: #9B349D; color: white;">Continuar Comprando</a>
            </div>
            <div class="col-lg-2 mt-3">
                <form action="{{ route('carrinho.destroyAll') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn" style="color: #9B349D;">Limpar Carrinho</button>
                </form>
            </div>
            <div class="col-lg-8 text-end">
                <form action="{{ route('pedidos.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="total" value="{{ $total }}">
                    <button type="submit" class="btn mt-3" style="background-color: #F5DB00; color: white;">Finalizar Compra</button>
                </form>
            </div>
        </div>
    </div>
@endsection
