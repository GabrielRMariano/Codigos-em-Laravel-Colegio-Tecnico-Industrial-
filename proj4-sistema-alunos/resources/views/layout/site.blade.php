<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>

    <!-- Materialize -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>

<body>

<nav>
    <div class="nav-wrapper blue">
        <a href="/" class="brand-logo center">Cursos</a>
    </div>
</nav>

<main>
    @yield('conteudo')
</main>

</body>
</html>