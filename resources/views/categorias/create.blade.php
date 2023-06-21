@extends('layouts.main')

@section('content')
<div class="container">

        <div class="card">
            <div class="card-header">
                <h1>Cadastrar Categoria</h1>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('categorias.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nome">Nome da Categoria:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <button type="submit" class="btn mt-2" style="background-color: #9B349D; color: white;" >Salvar</button>
                </form>
            </div>
        </div>
</div>
@endsection

