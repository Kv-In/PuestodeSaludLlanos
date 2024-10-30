@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tabla Registro Control
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tabla Registro Control</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tabla-registro-controls.update', $tablaRegistroControl->id_control) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tabla-registro-control.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
