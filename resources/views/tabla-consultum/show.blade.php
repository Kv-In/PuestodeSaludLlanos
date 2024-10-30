@extends('adminlte::page')

@section('title', 'Ver Consulta')

@section('template_title')
    {{ $tablaConsultum->name ?? __('Show') . " " . __('Tabla Consultum') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white shadow-lg border-light">
                    <div class="card-header bg-gradient-dark" style="display: flex; justify-content: space-between; align-items: center;">
                        <h3 class="card-title">{{ __('Detalles de la Consulta') }}</h3>
                        <div class="float-right">
                            <a class="btn btn-outline-light btn-sm" href="{{ route('tabla-consulta.index') }}">
                                <i class="fas fa-arrow-left"></i> {{ __('Regresar') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body bg-dark text-white">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <strong>Id Consulta:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaConsultum->id_consulta }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Nombre del Paciente:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaConsultum->paciente->nombre }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Fecha:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaConsultum->fecha }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Motivo Consulta:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaConsultum->motivo_consulta }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <strong>Presión Arterial:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaConsultum->presion_arterial }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Peso:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaConsultum->peso }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Diagnóstico:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaConsultum->diagnostico }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Tratamiento:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaConsultum->tratamiento }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <strong>Firma Médica:</strong>
                            <p class="form-control-plaintext text-white">{{ $tablaConsultum->firma_medica }}</p>
                        </div>

                        <div  class="d-flex justify-content-end">
                            <a href="{{ route('editar.consulta', $tablaConsultum->id_consulta) }}" class="btn btn-success mr-3">
                                <i class="fas fa-plus"></i> Crear Consulta
                            </a>
                        

                       
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
@endsection

