@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tabla Antecedente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tabla Antecedente</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tabla-antecedentes.update', $tablaAntecedente->id_antecedente) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tabla-antecedente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
