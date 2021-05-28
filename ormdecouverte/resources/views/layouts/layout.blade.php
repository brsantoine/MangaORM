<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/mangas.css">

        <title>
            @yield('titrePage')
        </title>
    </head>
    <body>
        <nav class="navbar navbar-expend-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/mangas')}}">MangaWorld</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/mangas')}}">Home</a>
                        </li>
                        <li>
                            <a class="nav-link" href="https://www.senscritique.com/bd/actualite/manga">Actualités</a>
                        </li>
                        <li>
                            <a class="nav-link" href="https://www.senscritique.com/bd/actualite/manga">Comics</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Voir...
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" role="button">
                                <li><a class="dropdown-item" href="{{url('/dessinateurs')}}">Les Dessinateurs</a></li>
                                <li><a class="dropdown-item" href="{{url('/scenaristes')}}">Les Scénaristes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            @yield('titreItem')
        </header>
        @yield('contenu')
        <footer class="footer">
            Manga - copyright 3AInfo - 2021
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>