@extends('layouts.main')

@section('title', 'Listagem de Categorias')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-lg-8 mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="" style="color: #9B349D; font-weight: bold">Categorias</h1>
                        </div>
                        <div class="col-lg-6 text-end">
                            <a href="{{ route('categorias.create') }}" class="btn mt-2 mb-2" style="background-color: #F5DB00; color: white; font-weight: bold;"><i class="fa-solid fa-plus"></i></a>
                        </div>                    
                    </div>
                    <hr>
                    @if ($categorias->isEmpty())
                        <p>Nenhuma categoria encontrada.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th> Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $categoria)
                                    <tr>
                                        <td>{{ $categoria->id }}</td>
                                        <td>{{ $categoria->nome }}</td>
                                        <td>
                                          <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn" style="background-color: #F5DB00; color: white; font-family: bold;"><i class="fa-solid fa-trash-can"></i></button>
                                          </form>
                                        </td>
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
