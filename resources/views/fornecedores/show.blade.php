@extends('layouts.main')

@section('title', 'Detalhes do Fornecedor')

@section('content')
    <div class="container">
        <div class="cell d-flex justify-content-center text-center">
            <div class="card col-lg-6 mt-3">
                <div class="card-body">
                    <div class="col">
                        <h1>Fornecedor: {{ $fornecedor->nome }}</h1>
                        <p>Endereço: {{ $fornecedor->endereco }}</p>
                        <p>Telefone: {{ $fornecedor->telefone }}</p>
                        <p>Email: {{ $fornecedor->email }}</p>
                        <a href="{{ route('fornecedores.index') }}" class="btn btn-primary">Voltar</a>
                        <a href="{{ route('fornecedores.edit', $fornecedor->id) }}" class="btn btn-warning">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
