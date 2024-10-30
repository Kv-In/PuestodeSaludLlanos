<!doctype html>
<html lang="en">
    <head>
        
        <title>Registrarse</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
        <form method="POST" action="{{ route('register') }}">
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
                                            <h3 class="mb-4">Regístrate</h3>
                                        </div>
                                        <div class="w-100">
                                            <p class="social-media d-flex justify-content-end">
                                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- CUI -->
                                    <div class="form-group mb-3">
                                        <label class="label" for="cui">Cui</label>
                                        <input id="cui" type="text" class="form-control" name="cui" value="{{ old('cui') }}" placeholder="Escribe tu CUI" required autofocus autocomplete="cui">
                                        @error('cui')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <!-- Nombre -->
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Nombre</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Escribe tu nombre" required autofocus autocomplete="name">
                                        @error('name')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                                       <!-- Teléfono -->
                                <div class="form-group mb-3">
                                    <label class="label" for="phone">Teléfono</label>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Escribe tu número de teléfono" required autocomplete="tel">
                                    @error('phone')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                    <!-- Correo -->
                                    <div class="form-group mb-3">
                                        <label class="label" for="email">Correo</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Escribe tu email" required autocomplete="username">
                                        @error('email')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

        
                                    <!-- Contraseña -->
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Contraseña</label>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Escribe tu contraseña" required autocomplete="new-password">
                                        @error('password')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <!-- Confirmar Contraseña -->
                                    <div class="form-group mb-3">
                                        <label class="label" for="password_confirmation">Confirmar Contraseña</label>
                                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirma tu contraseña" required autocomplete="new-password">
                                        @error('password_confirmation')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    
                                
                                    <!-- Botón de Registro -->
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>

                              

        
                                    <!-- Enlace para iniciar sesión -->
                                    <div class="form-group d-flex justify-content-center">
                                        <div class="w-100 text-center">
                                            <a href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia sesión</a>
                                        </div>
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
                </div>
            </section>
        </form>
        
        
        <!-- Bootstrap JavaScript Libraries -->
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
  
@endif

    </body>
</html>

