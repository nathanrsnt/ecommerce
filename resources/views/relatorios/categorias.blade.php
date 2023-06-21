@extends('layouts.main')

@section('title', 'Relatório de Produtos por Categoria')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-lg-8 mt-3">
                <div class="card-body">
                    <h1 style="color: #9B349D; font-weight: bold;">Relatório de Produtos por Categoria</h1>
                    
                    <form action="{{ route('relatorio.categoria') }}" method="GET" class="mb-3">
                        <div class="form-group">
                            <label for="categoria">Selecione uma categoria:</label>
                            <select class="form-control" id="categoria" name="categoria">
                                <option value="">Todas</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn mt-2" style="background-color: #9B349D; color: white;">Buscar</button>
                    </form>

                    @if (!isset($produtosPorCategoria))
                        <p>Nenhum produto encontrado.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtosPorCategoria as $produto)
                                    <tr>
                                        <td>{{ $produto->id }}</td>
                                        <td>{{ $produto->nome }}</td>
                                        <td>{{ $produto->categoria }}</td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
