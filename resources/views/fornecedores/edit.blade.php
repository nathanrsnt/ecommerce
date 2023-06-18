@extends('layouts.main')

@section('title', 'Editar Fornecedor')

@section('content')
    <div class="container">
        <div class="cel d-flex justify-content-center text-center">
            <div class="card col-lg-6 mt-3">
                <div class="card-body">
                    <div class="col">
                        <h1>Editar Fornecedor</h1>
                        <div class="col-lg-8 mx-auto">
                            <form action="{{ route('fornecedores.update', $id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <label for=""></label>
                                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Fornecedor" value="">
                                <label for=""></label>
                                <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço" value="">
                                <label for=""></label>
                                <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone" value="">
                                <label for="email"></label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" value="">
                                <input class="btn btn-success mt-3" type="submit" value="Salvar">"
                                <a href="{{ route('fornecedores.index') }}" class="btn btn-primary mt-3">Voltar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
