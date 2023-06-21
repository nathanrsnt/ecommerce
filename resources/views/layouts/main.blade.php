<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6aa92d4619.js" crossorigin="anonymous"></script>
    <style> 
        .pesquisa-input {
            width: 1000px;
        }
    </style>
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9B349D;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="/img/logo.png" width="65px" height="35px" title="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home') }}">Home</a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownVendas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Vendas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownVendas">
                        <li><a class="dropdown-item" href="#">Minhas Venda</a></li>
                        <li><a class="dropdown-item" href="{{ route('produtos.index') }}">Produtos</a></li>
                        <li><a class="dropdown-item" href="{{ route('fornecedores.index') }}">Fornecedores</a></li>
                        <li><a class="dropdown-item" href="{{ route('categorias.index') }}">Categoria</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCompras" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Compras
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownCompras">
                        <li><a class="dropdown-item" href="{{ route('pedidos.index')}}">Minhas Compra</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a a class="nav-link dropdown-toggle" href="#" id="navbarDropdownVendas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Relatórios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownVendas">
                        <li><a class="dropdown-item" href="{{ route('relatorio.categoria') }}">Produtos por categoria</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
            <ul class="navbar-nav me-auto">
                <li class="nav-item me-auto pesquisa-input" id="navbarSupportedContent">
                    <form class="d-flex" action="{{ route('produtos.search') }}" method="post">
                        @csrf
                        <input type="text" class="form-control col-lg-12" placeholder="Pesquisar" id="search" name="search">
                        <button class="btn" type="submit" style="color: white;"><i class="fas fa-search"></i></button>
                    </form>
                </li>
            </ul> 
            <ul class="navbar-nav ml-auto">
                <li class="nav-item me-2">
                    <a href="{{ route('carrinho.index') }}" class="btn" style=" color: #F5DB00;"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="{{ route('profile.show')}}" class="btn" style="background-color: white; color: #9B349D;">Perfil</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline ms-2" style="color:white;">Logout</button>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="/login" class="btn btn-outline me-2" style="color:white;">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="btn" style="background-color: white; color: #9B349D;">Sign Up</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

    <div class="container py-3">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

