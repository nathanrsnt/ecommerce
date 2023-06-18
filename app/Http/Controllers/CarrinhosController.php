<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhosController extends Controller
{
    public function index(){
        return view('carrinhos.index');
    }
}
