@extends('adminlte::page')

@section('title', 'Editar')

@section('template_title')
    {{ __('Update') }} Tabla Consultum
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tabla Consultum</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tabla-consulta.update', $tablaConsultum->id_consulta) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tabla-consultum.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
