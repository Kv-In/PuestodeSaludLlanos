<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Puesto de Salud #1</title>
        <link rel="icon" type="image/umg.ico" href="assets/umg.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                
                <a class="navbar-brand" href="#page-top">
                    <img src="assets/umg_1.ico" alt="Logo" style="width: 65px; height: 65px; margin-right: 10px;">
                    SDGEME_PS
                </a>

                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 
                                        ring-transparent transition hover:text-black/70 
                                        :outline-none focus-visible:ring-[#FF2D20]
                                         dark:text-white dark:hover:text-white/80 
                                         dark:focus-visible:ring-white"
                                    >
                                        Home
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Iniciar Sesion
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Registrate
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>



        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Puesto de Salud</h1>
                        <h5 class="text-white-50 mx-auto mt-2 mb-5">Del Canton Llanos del Pinal del Sector 1</h5>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Bienvenido</h2>
                        
                    </div>
                </div>
            </div>
        </header>



        <!-- informacion-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">SDGEME_PS</h2>
                        <p class="text-white-50">
                            Sistema de Digitalización y Gestión de 
                            Expedientes Médicos Electrónicos del Puesto de Salud de Llanos del Pinal, 
                            Sector 1, Quetzaltenango, es un proyecto diseñado para mejorar la atención 
                            médica en la comunidad. Este sistema tiene como objetivo optimizar 
                            el manejo y almacenamiento de los expedientes médicos mediante la 
                            digitalización, lo que permitirá un acceso más rápido y seguro a la 
                            información de los pacientes. Es una herramienta pensada para apoyar 
                            al personal de salud en su labor diaria, facilitando la organización
                             de los registros y el seguimiento de los casos médicos de manera 
                             eficiente. Este proyecto es una contribución directa para mejorar 
                             la calidad del servicio en una región con acceso limitado a tecnologías 
                             avanzadas, fortaleciendo así el sistema de salud local y beneficiando tanto 
                             al personal como a los pacientes.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        
        
        

        
        <!-- Pie de Pagina-->
        <section class="contact-section bg-black"  id="info">
            <div class="container px-4 px-lg-5">
                
                    <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="mailto:recuperacionllanosdelpinal@gmail.com"><i class="fa-regular fa-envelope-open"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>



        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; SDGEME_PS 2023</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
