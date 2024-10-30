@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profile') }}
    </h2>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <p class="h3 text-center"> Actualiza tu Perfil</p>
        </div>
        <div class="card-body">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <p class="h3 text-center"> Cambiar Contraseña</p>
        </div>
        <div class="card-body">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <p class="h3 text-center">Eliminar Tu Perfil</p>
        </div>
        <div class="card-body">
            @include('profile.partials.delete-user-form')
        </div>
    </div>

    
@stop

@section('css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@stop
