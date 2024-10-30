{{-- resources/views/historial-consultas/index.blade.php --}}
@extends('adminlte::page')

@section('title', 'Historial de Consultas de ' . $paciente->nombre)

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white shadow-lg border-light">
                    <div class="card-header bg-gradient-dark">
                        <h3 class="card-title">Historial de Consultas de {{ $paciente->nombre }}</h3>
                        <div class="float-right">
                            <a class="btn btn-outline-light btn-sm" href="{{ route('tabla-consulta.index') }}">
                                <i class="fas fa-arrow-left"></i> {{ __('Regresar') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body bg-dark text-white">
                        @if($consultasFinales->isEmpty())
                            <p class="text-white">No hay consultas registradas para este paciente.</p>
                        @else
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th>ID Consulta</th>
                                        <th>Fecha</th>
                                        <th>Motivo Consulta</th>
                                        <th>Diagnóstico</th>
                                        <th>Tratamiento</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($consultasFinales as $consultaFinal)
                                        <tr>
                                            <td>{{ $consultaFinal->consulta->id_consulta }}</td>
                                            <td>{{ $consultaFinal->consulta->fecha }}</td>
                                            <td>{{ $consultaFinal->consulta->motivo_consulta }}</td>
                                            <td>{{ $consultaFinal->consulta->diagnostico }}</td>
                                            <td>{{ $consultaFinal->consulta->tratamiento }}</td>
                                            <td>
                                                <a href="{{ route('editar.consulta', $consultaFinal->consulta->id_consulta) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i> Editar
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- Paginación --}}
                            {{ $consultasFinales->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
