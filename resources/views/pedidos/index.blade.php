@extends('layouts.main')

@section('title', 'Meus Pedidos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-lg-8 mt-3">
                <div class="card-body">
                    <h1>Meus Pedidos</h1>
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Número do Pedido</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td>123</td>
                                        <td>23/04/2023</td>
                                        <td>R$ 25,50</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">Detalhes</a>
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
