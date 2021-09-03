<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Doadores</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/brand.jpg')}}">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{!!route('doador.index')!!}">Doadores<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!!route('doador.create')!!}">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!!route('doacao.index')!!}">Doações</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container">        
        @yield('contents')
    </div>
</body>
</html>