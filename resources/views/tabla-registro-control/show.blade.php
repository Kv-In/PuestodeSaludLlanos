@extends('layouts.app')

@section('template_title')
    {{ $tablaRegistroControl->name ?? __('Show') . " " . __('Tabla Registro Control') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tabla Registro Control</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tabla-registro-controls.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Control:</strong>
                                    {{ $tablaRegistroControl->id_control }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Paciente:</strong>
                                    {{ $tablaRegistroControl->id_paciente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Insumo:</strong>
                                    {{ $tablaRegistroControl->id_insumo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Medicamento:</strong>
                                    {{ $tablaRegistroControl->medicamento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad Entregada:</strong>
                                    {{ $tablaRegistroControl->cantidad_entregada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Consulta:</strong>
                                    {{ $tablaRegistroControl->fecha_consulta }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
