<!doctype html>
<html lang="en">
    <head>
        <title>Restablecer Contraseña</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link rel="icon" type="image/umg.ico" href="assets/umg.ico" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
    </head>

    <body>
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="wrap d-md-flex">
                                <!-- Imagen de fondo -->
                                <div class="img" style="background-image: url(assets/img/Puesto.jpg);"></div>
        
                                <!-- Sección del formulario -->
                                <div class="login-wrap p-4 p-md-5">
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4">Restablecer Contraseña</h3>
                                        </div>
                                    </div>
        
                                    <div class="mb-4 text-sm text-gray-600">
                                        {{ __('¿Olvidaste tu contraseña? No hay problema. Solo háznos saber tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña que te permitirá elegir una nueva.') }}
                                    </div>
        
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
        
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
        
                                        <!-- Email Address -->
                                        <div class="form-group mb-3">
                                            <label class="label" for="email">Correo</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Escribe tu email" required autofocus>
                                            @error('email')
                                                <span class="text-danger mt-2">{{ $message }}</span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary rounded submit px-3 ">
                                                {{ __('Restablecer la contraseña') }}
                                            </button>
                                        </div>
        
                                    </form>
                                </div>
                            </div>
                        </div>
        
                        <!-- Inicio -->
                        <div class="text-center mt-3">
                            <a href="{{ route('Inicio') }}">
                                <img src="{{ asset('assets/umg_1.ico') }}" alt="Logo" style="width: 65px; height: 65px;">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        
        







        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
