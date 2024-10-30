@extends('adminlte::page')

@section('title', 'Editar')

@section('template_title')
    {{ __('Update') }} Tabla Receta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tabla Recetum</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tabla-receta.update', $tablaRecetum->id_receta) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tabla-recetum.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
