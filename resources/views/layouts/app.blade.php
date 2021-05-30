<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="overflow: hidden;"

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
            <li>
                <div class="">
                    @if (Route::has('login'))
                        <div class="px-2">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline"> <img src="https://image.flaticon.com/icons/png/512/1077/1077114.png" style="width: 24px; filter: invert(100%);" alt=""> Utente</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                            
                            @endauth
                        </div>
                    @endif
            </li>
        </ul>
    </nav>

    

    <div class="d-flex flex-row ">

        <div class="sidebar bg-dark">
            <ul class="list-unstyled components dropdown pt-2 bg-dark">
                <li class="dropend p-1 bg-dark">
                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                        <img src="https://image.flaticon.com/icons/png/512/3378/3378284.png" alt=":C" style="filter: grayscale(100%) invert(100%); width:24px;"> Articoli</a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a href="{{url('listaArticoli')}}" class="dropdown-item text-light bg-dark">Tutti gli articoli</a>
                        </li>
                        <li>
                            <a href="{{url('nuovoArticolo')}}" class="dropdown-item text-light bg-dark">Aggiungi nuovo</a>
                        </li>
                        <li>
                            <a href="{{url('listaCategorie')}}" class="dropdown-item text-light bg-dark">Categorie</a>
                        </li>
                    </ul>
                </li>

                <li class="dropend p-1">
                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                        <img src="https://image.flaticon.com/icons/png/512/3342/3342176.png" alt="" style="filter: invert(100%); width:24px;" /> Galleria</a>
                    <ul class="dropdown-menu text-light bg-dark" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a href="{{url('libreria')}}" class="dropdown-item text-light bg-dark">Libreria</a>
                        </li>
                        <li>
                            <a href="{{url('aggiungiImmagine')}}" class="dropdown-item text-light bg-dark">Aggiungi nuovo</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <div class="container align-content-center">
            @yield('formArticoli')
            @yield('formCategorie')
            @yield('listaArticoli')
            @yield('listaCategorie')
            @yield('libreria')
            @yield('aggiungiImmagine')
            
</html>