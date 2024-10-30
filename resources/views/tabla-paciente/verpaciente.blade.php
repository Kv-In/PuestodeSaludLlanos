@extends('layouts.app')

@section('template_title')
    {{ $tablaPaciente->name ?? __('Show') . " " . __('Tabla Paciente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tabla Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tabla-pacientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Id Paciente:</strong>
                            {{ $tablaPaciente->id_paciente }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $tablaPaciente->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Edad:</strong>
                            {{ $tablaPaciente->edad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Sexo:</strong>
                            {{ $tablaPaciente->sexo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estado Civil:</strong>
                            {{ $tablaPaciente->estado_civil }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Etnia:</strong>
                            {{ $tablaPaciente->etnia }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Puesto Servicio:</strong>
                            {{ $tablaPaciente->puesto_servicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Region Presupuestario:</strong>
                            {{ $tablaPaciente->region_presupuestario }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Unidad Administrativa:</strong>
                            {{ $tablaPaciente->unidad_administrativa }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Dpi Cui:</strong>
                            {{ $tablaPaciente->dpi_cui }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $tablaPaciente->telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Emergencia Nombre:</strong>
                            {{ $tablaPaciente->emergencia_nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Emergencia Telefono:</strong>
                            {{ $tablaPaciente->emergencia_telefono }}
                        </div>

                        <!-- Botón para Crear Consulta -->
                        <div class="mt-4">
                            <a href="{{ route('consulta.create', $tablaPaciente->id_paciente) }}" class="btn btn-success">
                                Crear Consulta
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
