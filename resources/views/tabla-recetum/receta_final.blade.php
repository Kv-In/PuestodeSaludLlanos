@extends('adminlte::page')

@section('title', 'Receta Pendiente')

@section('content')
<div class="container">
    <h1>Recetas A Entregar</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Receta Final</th>
                <th>Nombre Paciente</th>
                <th>Estado Receta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recetasFinales as $recetaFinal)
                <tr>
                    <td>{{ $recetaFinal->id }}</td>
                    <td>{{ $recetaFinal->receta->consulta->paciente->nombre }}</td>
                    <td>{{ ucfirst($recetaFinal->estado) }}</td>
                
                    <td>
                    <!-- Botón para ver detalles de la receta final -->
                    <a href="{{ route('tabla-receta.show', $recetaFinal->id_receta) }}?id_receta_final={{ $recetaFinal->id }}" class="btn btn-info">Ver</a>
                </td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
