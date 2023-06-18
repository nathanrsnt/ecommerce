<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {
        return view('pedidos.index');
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('pedidos.show', ['id' => $id]);
    }

    public function edit($id)
    {
        return view('pedidos.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
