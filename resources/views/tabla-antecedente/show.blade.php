@extends('layouts.app')

@section('template_title')
    {{ $tablaAntecedente->name ?? __('Show') . " " . __('Tabla Antecedente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tabla Antecedente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tabla-antecedentes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Antecedente:</strong>
                                    {{ $tablaAntecedente->id_antecedente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Paciente:</strong>
                                    {{ $tablaAntecedente->id_paciente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Medicos:</strong>
                                    {{ $tablaAntecedente->medicos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Quirurgicos:</strong>
                                    {{ $tablaAntecedente->quirurgicos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Traumaticos:</strong>
                                    {{ $tablaAntecedente->traumaticos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Alergicos:</strong>
                                    {{ $tablaAntecedente->alergicos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Familiares:</strong>
                                    {{ $tablaAntecedente->familiares }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
