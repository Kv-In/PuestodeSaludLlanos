@extends('adminlte::page')

@section('title', 'Crear')

@section('template_title')
    {{ __('Create') }} Tabla Consultum
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Tabla Consultum</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tabla-consulta.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tabla-consultum.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
