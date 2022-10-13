<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
       
       <!-- fonte do google-->
       <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

       <!-- CSS do bootstrap-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

       <!-- CSS padrao-->
       <link rel="stylesheet" href="css/styles.css">
       <script src="/js/scripts.js"></script>

    </head>
    <body>
        <header>
           <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/globe.svg" alt="Aluno Professor">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/prof/create" class="nav-link">Professores</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Materia</a>
                    </li>
                </ul>
            </div>
           </nav> 
        </header>
        @yield('content')
        <footer>
            <p>teste &copy;2022</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>