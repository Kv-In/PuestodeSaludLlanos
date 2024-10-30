@extends('adminlte::page')

@section('title', 'Información del Paciente')

@section('template_title')
    {{ $tablaPaciente->nombre ?? __('Información del Paciente') }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Perfil del Paciente</h3>
                    <a class="btn btn-outline-light btn-sm" href="{{ route('tabla-pacientes.index') }}">
                        <i class="fas fa-arrow-left"></i> Volver a la Lista
                    </a>
                </div>

                <div class="card-body bg-light">
                    <div class="row">
                        <!-- Datos Personales -->
                        <div class="col-md-6">
                            <h5 class="text-secondary">Información General</h5>
                           <!-- <p><strong>ID Paciente:</strong> {{ $tablaPaciente->id_paciente }}</p>-->
                            <p><strong>Nombre:</strong> {{ $tablaPaciente->nombre }}</p>
                            <p><strong>Edad:</strong> {{ $tablaPaciente->edad }}</p>
                            <p><strong>Sexo:</strong> {{ $tablaPaciente->sexo }}</p>
                            <p><strong>Estado Civil:</strong> {{ $tablaPaciente->estado_civil }}</p>
                            <p><strong>Etnia:</strong> {{ $tablaPaciente->etnia }}</p>
                        </div>
                        <!-- Información de Contacto -->
                        <div class="col-md-6">
                            <h5 class="text-secondary">Contacto y Ubicación</h5>
                            <p><strong>Teléfono:</strong> {{ $tablaPaciente->telefono }}</p>
                            <p><strong>DPI/CUI:</strong> {{ $tablaPaciente->dpi_cui }}</p>
                            <p><strong>Región Presupuestaria:</strong> {{ $tablaPaciente->region_presupuestario }}</p>
                            <p><strong>Unidad Administrativa:</strong> {{ $tablaPaciente->unidad_administrativa }}</p>
                            <p><strong>Puesto Servicio:</strong> {{ $tablaPaciente->puesto_servicio }}</p>
                        </div>
                    </div>

                    <!-- Información de Emergencia -->
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5 class="text-danger">Contacto de Emergencia</h5>
                            <p><strong>Nombre:</strong> {{ $tablaPaciente->emergencia_nombre }}</p>
                            <p><strong>Teléfono:</strong> {{ $tablaPaciente->emergencia_telefono }}</p>
                        </div>
                    </div>

                    <!-- Acciones -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('consulta.create', $tablaPaciente->id_paciente) }}" class="btn btn-success">
                            <i class="fas fa-notes-medical"></i> Crear Consulta
                        </a>
                        <a href="{{ route('paciente.consultas', ['id' => $tablaPaciente->id_paciente]) }}" class="btn btn-info">
                            <i class="fas fa-history"></i> Ver Historial de Consultas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
