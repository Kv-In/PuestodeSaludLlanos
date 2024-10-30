@extends('layouts.app')

@section('template_title')
    {{ $tablaInventarioInsumo->name ?? __('Show') . " " . __('Tabla Inventario Insumo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tabla Inventario Insumo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tabla-inventario-insumos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Insumo:</strong>
                                    {{ $tablaInventarioInsumo->id_insumo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $tablaInventarioInsumo->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad Existente:</strong>
                                    {{ $tablaInventarioInsumo->cantidad_existente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad Entregada:</strong>
                                    {{ $tablaInventarioInsumo->cantidad_entregada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Saldo:</strong>
                                    {{ $tablaInventarioInsumo->saldo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Vencimiento:</strong>
                                    {{ $tablaInventarioInsumo->fecha_vencimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Recepcion:</strong>
                                    {{ $tablaInventarioInsumo->fecha_recepcion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
