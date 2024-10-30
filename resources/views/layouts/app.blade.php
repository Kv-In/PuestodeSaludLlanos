<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="//cdn.jsdelivr.net/npm/alpinejs@3.x.x" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts: usando Vite para compilar Bootstrap y otros recursos -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    <div class="d-flex" id="wrapper" style="height: 100vh;">



        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            </nav>

            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Script para mostrar/ocultar subopciones -->
    <script>
        // Mostrar/Ocultar subopciones de Pacientes
        document.getElementById("pacientes-toggle").addEventListener("click", function() {
            const subopcionesPacientes = document.getElementById("subopciones-pacientes");
            subopcionesPacientes.style.display = subopcionesPacientes.style.display === "none" ? "block" : "none";
        });

        // Mostrar/Ocultar subopciones de Configuraciones
        document.getElementById("configuraciones-toggle").addEventListener("click", function() {
            const subopcionesConfiguraciones = document.getElementById("subopciones-configuraciones");
            subopcionesConfiguraciones.style.display = subopcionesConfiguraciones.style.display === "none" ? "block" : "none";
        });
    </script>
</body>
</html>