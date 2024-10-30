@extends('adminlte::page')

@section('title', 'Editar')

@section('template_title')
    {{ __('Update') }} Tabla Paciente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tabla Paciente</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tabla-pacientes.update', $tablaPaciente->id_paciente) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tabla-paciente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
