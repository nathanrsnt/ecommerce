@extends('layouts.main')

@section('title', 'Detalhes do Produto')

@section('content')
@if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('msg') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container">
    <div class="cel d-flex justify-content-center text-center">
        <div class="card col-lg-9 mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="/img/produtos/{{ $produto->imagem }}" class="card-img-top" width="300" height="400" alt="{{ $produto->nome }}">
                    </div>
                    <div class="col-lg-6 text-start">
                        <table>
                            <tr>
                                <th>Produto: </th>
                                <td>{{ $produto->nome }}</td>
                            </tr>
                            <tr>
                                <th>Descrição: </th>
                                <td>{{ $produto->descricao }}</td>
                            </tr>
                            <tr>
                                <th>Categoria: </th>
                                <td>{{ $produto->categoria }}</td>
                            </tr>
                            <tr>
                                <th>Preço: </th>
                                <td>{{ $produto->preco }}</td>
                            </tr>
                            <tr>
                                <th>Quantidade: </th>
                                <td>{{ $produto->quantidade }}</td>
                            </tr>
                            <tr>
                                <th>Criado: </th>
                                <td>{{ $produto->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Atualizado: </th>
                                <td>{{ $produto->updated_at }}</td>
                            </tr>
                            <tr>
                                <th>Usuário: </th>
                            <td>{{ $produto->usuario }}</td>
                            </tr>
                        </table>
                        <div class="text-end">
                            <a class="button btn" href="{{ route('produtos.store') }}">Voltar</a>
                            @if(Auth::user()->id == $produto->usuario)
                                <a class="button btn" style="background-color: #9B349D ; color: white" href="{{ route('produtos.edit', $produto->id)}}">Editar</a>
                                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
