@extends('adminlte::page')

@section('title', 'Consultas Diarias')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Reporte de Consultas Diarias</h2>
    
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Seleccione el Mes y Año</h4>
        </div>
        <div class="card-body " style="height: 7rem;">
            <form action="{{ route('reportes.consultasDiarias') }}" method="GET" class="mb-4">
                <div class="form-row align-items-center">
                    <div class="form-group col-md-4">
                        <label for="month">Mes:</label>
                        <select name="month" id="month" class="form-control">
                            @php
                                $meses = [
                                    1 => 'Enero',
                                    2 => 'Febrero',
                                    3 => 'Marzo',
                                    4 => 'Abril',
                                    5 => 'Mayo',
                                    6 => 'Junio',
                                    7 => 'Julio',
                                    8 => 'Agosto',
                                    9 => 'Septiembre',
                                    10 => 'Octubre',
                                    11 => 'Noviembre',
                                    12 => 'Diciembre',
                                ];
                            @endphp
                            @foreach ($meses as $key => $mes)
                                <option value="{{ $key }}" {{ $key == date('n') ? 'selected' : '' }}>{{ $mes }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="year">Año:</label>
                        <select name="year" id="year" class="form-control">
                            @for ($i = date('Y'); $i >= 2000; $i--)
                                <option value="{{ $i }}" {{ $i == date('Y') ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary btn-block">Generar Reporte</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-4 shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Consultas del mes </h4>
        </div>
        <div class="card-body">
            <canvas id="consultasChart" width="400" height="200" class="mt-4"></canvas>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('consultasChart').getContext('2d');

        // Datos obtenidos del controlador
        var labels = <?php echo json_encode($consultas->pluck('fecha')->toArray()); ?>;
        var data = <?php echo json_encode($consultas->pluck('cantidad')->toArray()); ?>;

        // Crear el gráfico de barras
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Consultas Diarias',
                    data: data,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Fechas'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Cantidad de Consultas'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection
