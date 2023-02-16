<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- @vite(['resources/js/app.js']) --}}
    @vite('resources/css/bootstrap.min.css')
    {{-- @vite('resources/sass/app.scss') --}}
    <link rel="stylesheet" href="http://[::1]:5173/resources/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        div {
            border-radius: none !important;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/bootstrap.min.css'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <div class="container-fluid">
                        <!-- Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Homme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('client.index') }}">Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('client.create') }}">Add Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('commandeVente.index') }}">Commande De Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('commandeVente.create') }}">Add Commande</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                {{-- @endif

                            @if (Route::has('register')) --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="container my-5">
            <div class="shadow-4 rounded-5" style="border-radius: 0%;">
                <!--Message d'ajouter de client-->

                @if (Session::has('status store'))
                    <div class="alert alert-success alert-dismissible" class="alert">
                        <a href="{{ url()->previous() }}" class="close" data-dismiss="alert"
                            aria-label="close">&times;</a>
                        {{ Session::get('status store') }}

                    </div>
                @endif

                @if (Session::has('status Edit'))
                    <div class="alert alert-success alert-dismissible" class="alert">
                        <a href="{{ url()->previous() }}" class="close" data-dismiss="alert"
                            aria-label="close">&times;</a>
                        {{ Session::get('status Edit') }}

                    </div>
                @endif

                @if (Session::has('status Delete'))
                    <div class="alert alert-danger alert-dismissible" class="alert">
                        <a href="{{ route('client.index') }}" class="close" data-dismiss="alert"
                            aria-label="close">&times;</a>
                        {{ Session::get('status Delete') }}

                    </div>
                @endif

                @yield('container')
            </div>
            @yield('Ajout')
        </div>
    </div>

    <script>
        setTimeout(function() {
            // Select the alert element
            var alert = document.querySelector('.alert');
            // Remove the alert element from the page
            alert.parentNode.removeChild(alert);
        }, 3000); // 3 seconds
    </script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script> --}}
</body>

</html>
