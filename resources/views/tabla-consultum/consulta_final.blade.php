@extends('adminlte::page')

@section('title', 'Pendiente')

@section('content')
<div class="container">
    <h2>Consultas En Espera</h2>

    @if($consultasFinales->isEmpty())
        <p>No hay consultas en espera.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID Consulta</th>
                    <th>Nombre del Paciente</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consultasFinales as $consultaFinal)
                    <tr>
                        <!-- Mostrar el campo id_consulta -->
                        <td>{{ $consultaFinal->id_consulta }}</td>
                        <!-- Mostrar el nombre del paciente -->
                        <td>{{ $consultaFinal->consulta->paciente->nombre }}</td>
                        <td>{{ $consultaFinal->estado }}</td>
                        <td>
                            <!-- Botón para ver detalles de la consulta -->
                            <a href="{{ route('tabla-consulta.show', $consultaFinal->id_consulta) }}" class="btn btn-info">Ver</a>
                        </td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
