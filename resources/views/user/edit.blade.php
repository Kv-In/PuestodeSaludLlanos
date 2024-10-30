@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre</p>
            <p class="form-control">{{ $user->name }}</p>

            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                
                <h2 class="h5">Listado de Roles</h2>
                @foreach ($roles as $role)
                    <div>
                        <label>
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}" class="mr-1"
                                   {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'checked' : '' }}>
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach
            
                <button type="submit" class="btn btn-primary mt-2">Asignar rol</button>
            </form>
        </div>
    </div>

    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop
