@extends('layouts.main')

@section('title', 'Fornecedores')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Fornecedores</h1>
            </div>
            <div class="col-lg-2">
                <a href="{{ route('fornecedores.create') }}" class="btn btn-primary">Novo Fornecedor</a>
            </div>
        </div>
        <div class="row">
            <div class="card col-lg-12 mt-3">
                <div class="card-body">
                    @if ($fornecedores->count() > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Endereço</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fornecedores as $fornecedor)
                                    <tr>
                                        <td>{{ $fornecedor->nome }}</td>
                                        <td>{{ $fornecedor->endereco }}</td>
                                        <td>{{ $fornecedor->telefone }}</td>
                                        <td>{{ $fornecedor->email }}</td>
                                        <td>
                                            <a href="{{ route('fornecedores.show', $fornecedor->id) }}" class="btn btn-primary">Detalhes</a>
                                            <a href="{{ route('fornecedores.edit', $fornecedor->id) }}" class="btn btn-warning">Editar</a>
                                            <form action="{{ route('fornecedores.destroy', $fornecedor->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Nenhum fornecedor cadastrado.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
