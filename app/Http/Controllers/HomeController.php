<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        $categorias = Categoria::all();

        foreach ($produtos as $p) {
            foreach ($categorias as $c) {
                if ($c->id == $p->categoria) {
                    $p->categoria = $c->nome;
                }
            }
        }

        return view('home', ['produtos' => $produtos]);
    }
}
