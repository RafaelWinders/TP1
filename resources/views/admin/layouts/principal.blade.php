<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Despesas</title>
</head>
<body>

    <nav>
        <div class="container ">
            <div class="nav-wrapper ">
                <a href="/" class="brand-logo">{{$nome}}</a>
               <ul class="right">
                   <li><a href="">mensal</a></li>
                   <li><a href="">semanal</a></li>
               </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('conteudo-principal')
    </div>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
