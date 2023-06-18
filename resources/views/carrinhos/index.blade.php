@extends('layouts.main')

@section('title', 'Carrinho')

@section('content')
<div class="container mt-5">
        <h1 class="mb-4" style="font-weight: bold; color: #9B349D;">Meu Carrinho</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produto 1</td>
                    <td>R$ 49,90</td>
                    <td>2</td>
                    <td>R$ 99,80</td>
                </tr>
                <tr>
                    <td>Produto 2</td>
                    <td>R$ 29,90</td>
                    <td>1</td>
                    <td>R$ 29,90</td>
                </tr>
                <tr>
                    <td>Produto 3</td>
                    <td>R$ 39,90</td>
                    <td>3</td>
                    <td>R$ 119,70</td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <h4>Total: R$ 249,40</h4>
            <div class="col-lg-2 mt-3">
                <button class="btn" style="background-color: #9B349D; color: white;">Continuar Comprando</button>
            </div>
            <div class="col-lg-2 mt-3">
                <button class="btn" style="color: #9B349D;">Limpar Carrinho</button>
            </div>
            <div class="col-lg-8 text-end">
                <button class="btn mt-3" style="background-color: #F5DB00; color: white;">Finalizar Compra</button>
            </div>
        </div>
    </div>
@endsection
