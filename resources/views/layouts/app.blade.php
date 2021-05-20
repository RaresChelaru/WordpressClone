<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Wordpress</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/layoutApp.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar-nav bg-dark">
        <ul class="nav">
            <li class="nav-item">
                <a href="#" class="p-1"><img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Wordpress-Logo.svg" alt=":(" style="filter: invert(100%); width:24px;" /></a>
            </li>
        </ul>
    </nav>

    <div class="d-flex flex-row ">

        <div class="sidebar bg-dark">
            <ul class="list-unstyled components dropdown pt-2 bg-dark">
                <li class="dropend p-1 bg-dark">
                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                        <img src="https://img-premium.flaticon.com/png/512/3378/3378284.png?token=exp=1621524939~hmac=dbac293082e00188baa6b93e083be3ee" alt=":C" style="filter: grayscale(100%) invert(100%); width:24px;"> Articoli</a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a href="" class="dropdown-item text-light bg-dark">Tutti gli articoli</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item text-light bg-dark">Aggiungi nuovo</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item text-light bg-dark">Categorie</a>
                        </li>
                    </ul>
                </li>

                <li class="dropend p-1">
                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                        <img src="https://image.flaticon.com/icons/png/512/3342/3342176.png" alt="" style="filter: invert(100%); width:24px;" /> Galleria</a>
                    <ul class="dropdown-menu text-light bg-dark" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a href="/welcome" class="dropdown-item text-light bg-dark">Libreria</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item text-light bg-dark">Aggiungi nuovo</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <div class="container align-content-center">
            @yield('nuovoArticolo')

        </div>
</body>

</html>