@extends ('layouts.main')

@section('title', 'Novo Produto')

@section('content')
<div class="container">
        <div class="cel d-flex justify-content-center text-center">
            <div class="card col-lg-6 mt-3">
                <div class="card-body">
                    <div class="col">
                        <h1>Cadastrar Fornecedor</h1>
                        <div class="col-lg-8 mx-auto">
                            <form action="{{ route('fornecedores.store') }}" method="post">
                                @csrf
                                <label for=""></label>
                                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Fornecedor">
                                <label for=""></label>
                                <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço">
                                <label for=""></label>
                                <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone">
                                <label for=""></label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="E-mail do Fornecedor">
                                <label for=""></label>
                                <input class="btn btn-success mt-3" type="submit" value="Salvar">
                                <a href="{{ route('fornecedores.index') }}" class="btn btn-primary mt-3">Voltar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection