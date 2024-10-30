@extends('adminlte::page')

@section('title', 'Ver Receta')

@section('template_title')
    {{ $tablaRecetum->name ?? __('Show') . " " . __('Tabla Recetum') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white shadow-lg border-light">
                    <div class="card-header bg-gradient-dark" style="display: flex; justify-content: space-between; align-items: center;">
                        <h3 class="card-title">{{ __('Detalles de la Receta') }}</h3>
                        <div class="float-right">
                            <a class="btn btn-outline-light btn-sm" href="{{ route('tabla-receta.index') }}">
                                <i class="fas fa-arrow-left"></i> {{ __('Regresar') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body bg-dark text-white">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <strong>Id Receta:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaRecetum->id_receta }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Nombre Paciente:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaRecetum->consulta->paciente->nombre }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>DPI Paciente:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaRecetum->consulta->paciente->dpi_cui }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Fecha Emisión:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaRecetum->fecha_emision }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <strong>Contenido Receta:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaRecetum->contenido_receta }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Firma:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaRecetum->firma }}</p>
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Sello:</strong>
                                    <p class="form-control-plaintext text-white">{{ $tablaRecetum->sello }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <form method="POST" action="{{ route('medicamento.entregar', $idRecetaFinal) }}" role="form">
                                @csrf
                                <button type="submit" class="btn btn-success mr-3">
                                    <i class="fas fa-check"></i> Entregar medicamento
                                </button>
                            </form>
                            <a href="{{ route('receta.pdf', $tablaRecetum->id_receta) }}" class="btn btn-info mr-3">
        <i class="fas fa-file-pdf"></i> Generar PDF
    </a>
                        </div>

                        


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
