@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div id="motivacionCarousel" class="carousel slide" data-ride="carousel" data-interval="5000"> <!-- Intervalo de 5000 ms -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 1
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"El éxito es la suma de pequeños esfuerzos repetidos día tras día."</h5>
                        <p class="card-text">- Robert Collier</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 2
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"No cuentes los días, haz que los días cuenten."</h5>
                        <p class="card-text">- Muhammad Ali</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 3
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"La única forma de hacer un gran trabajo es amar lo que haces."</h5>
                        <p class="card-text">- Steve Jobs</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 4
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"No te detengas hasta que te sientas orgulloso."</h5>
                        <p class="card-text">- Anónimo</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 5
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"La única manera de hacer un gran trabajo es amar lo que haces."</h5>
                        <p class="card-text">- Steve Jobs</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 6
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"Hazlo con pasión o no lo hagas en absoluto."</h5>
                        <p class="card-text">- Rosa Nouchette Carey</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 7
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"Cree en ti mismo y todo será posible."</h5>
                        <p class="card-text">- Anónimo</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 8
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"La felicidad no es algo hecho. Proviene de tus propias acciones."</h5>
                        <p class="card-text">- Dalai Lama</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 9
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"No importa cuántas veces fracases, solo necesitas tener éxito una vez."</h5>
                        <p class="card-text">- Anónimo</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 10
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"No se trata de cuántas veces caes, sino de cuántas veces te levantas."</h5>
                        <p class="card-text">- Anónimo</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 11
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"El futuro pertenece a aquellos que creen en la belleza de sus sueños."</h5>
                        <p class="card-text">- Eleanor Roosevelt</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 12
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"Lo que haces hoy puede mejorar todos tus mañanas."</h5>
                        <p class="card-text">- Ralph Marston</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 13
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"El único límite a nuestros logros de mañana son nuestras dudas de hoy."</h5>
                        <p class="card-text">- Franklin D. Roosevelt</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 14
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"Los sueños no funcionan a menos que tú trabajes."</h5>
                        <p class="card-text">- John C. Maxwell</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 15
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"El éxito es la habilidad de ir de un fracaso a otro sin perder el
                            entusiasmo."</h5>
                        <p class="card-text">- Winston Churchill</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 16
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"La vida es 10% lo que te sucede y 90% cómo reaccionas a ello."</h5>
                        <p class="card-text">- Charles R. Swindoll</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 17
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"No sueñes tu vida, vive tu sueño."</h5>
                        <p class="card-text">- Anónimo</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card text-center">
                    <div class="card-header">
                        Motivación 18
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"Cada día es una nueva oportunidad para cambiar tu vida."</h5>
                        <p class="card-text">- Anónimo</p>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#motivacionCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#motivacionCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    @stop

    @section('css')
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        {{-- Add here extra stylesheets --}}
        {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @stop

    @section('js')
        <script>
            console.log("Hi, I'm using the Laravel-AdminLTE package!");
        </script>

        <!-- jQuery and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @stop
