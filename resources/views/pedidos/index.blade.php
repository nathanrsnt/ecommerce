@extends('layouts.main')

@section('title', 'Meus Pedidos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-lg-8 mt-3">
                <div class="card-body">
                    <h1 style="color: #9B349D; font-weight: bold;">Meus Pedidos</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Número do Pedido</th>
                                <th scope="col">Data</th>
                                <th scope="col">Total</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        @if ($pedidos->count() == 0)
                            <tbody>
                                <tr>
                                    <td colspan="4">Você ainda não fez nenhum pedido.</td>
                                </tr>
                            </tbody>
                        @else
                        @foreach ($pedidos as $pedido)
                            <tbody>
                                <tr>
                                    <td>{{ $pedido->id }}</td>
                                    <td>{{ $pedido->created_at }}</td>
                                    <td>R$ {{ $pedido->total }}</td>
                                    <td>
                                        <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-sm" style="background-color: #9B349D; color: white;">Detalhes</a>
                                        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn">Cancelar</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                        @endif
                    </table>  
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('produtos.index') }}" class="btn" style="background-color: #9B349D; color: white;">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
