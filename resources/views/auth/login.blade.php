<!doctype html>
<html lang="en">
    <head>
        <title>Iniciar Secion</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
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
        <form method="POST" action="{{ route('login') }}">
            @csrf <!-- Necesario para la protección CSRF en Laravel -->
        
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
                                            <h3 class="mb-4">Iniciar Sesión</h3>
                                        </div>
                                        <div class="w-100">
                                            <p class="social-media d-flex justify-content-end">
                                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                            </p>
                                        </div>
                                    </div>
        
                                    <!-- Email (Usuario) -->
                                    <div class="form-group mb-3">
                                        <label class="label" for="email">Correo</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Escribe tu email" required autofocus autocomplete="username">
                                        @error('email')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <!-- Contraseña -->
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Contraseña</label>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Escribe tu contraseña" required autocomplete="current-password">
                                        @error('password')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                
        
                                    <!-- Botón de Iniciar Sesión -->
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                            {{ __('Iniciar Sesión') }}
                                        </button>
                                    </div>
        
                                    <!-- Enlace para recuperar contraseña -->
                                    @if (Route::has('password.request'))
                                    <div class="form-group d-flex justify-content-center">
                                        <div class="w-100 text-center">
                                            <a href="{{ route('password.request') }}">¿Has olvidado tu contraseña?</a>
                                        </div>
                                    </div>
                                    @endif

                                    <!-- Registro -->
                                    <p class="text-center mt-3">¿No eres miembro? <a href="{{ route('register') }}">Regístrate</a></p>
                                
                                </div>
                            </div>
                        </div>
                        <!-- Inicio -->
                        <div class="text-center mt-3">
                            <a href="{{ route('Inicio') }}">
                                <img src="assets/umg_1.ico" alt="Logo" style="width: 65px; height: 65px;">

                            </a>
                        </div>
                        
                    </div>
                </div>
            </section>
        </form>
        

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        @if ($errors->any())
    <script>
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}');
        @endforeach
    </script>
@endif

    </body>
</html>
