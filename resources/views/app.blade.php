<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Wordpress</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Fonts -->


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a href="#" class="p-1"><img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Wordpress-Logo.svg" alt=":(" style="filter: invert(100%);" /></a>
            </li>
        </ul>
    </nav>

    <div class="d-flex flex-row ">

        <div class="sidebar">
            <ul class="list-unstyled components dropdown pt-2">
                <li class="dropend p-1">
                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                        <img src="https://img-premium.flaticon.com/png/512/3378/3378284.png?token=exp=1621524939~hmac=dbac293082e00188baa6b93e083be3ee" alt=":C" style="filter: grayscale(100%) invert(100%);"> Articoli</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a href="" class="dropdown-item">Tutti gli articoli</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">Aggiungi nuovo</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">Categorie</a>
                        </li>
                    </ul>
                </li>

                <li class="dropend p-1">
                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                        <img src="https://image.flaticon.com/icons/png/512/3342/3342176.png" alt="" style="filter: invert(100%);" /> Galleria</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a href="/welcome" class="dropdown-item">Libreria</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">Aggiungi nuovo</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        @hasSection('nuovoArticolo')
        <div class="container align-content-center">
            @yield('nuovoArticolo')

        </div>
        @endif
</body>

</html>