@extends('adminlte::page')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Buscar Paciente</h2>
    
    <form action="{{ route('pacientes.buscar') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese nombre o parte del nombre" required>
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>

    @if(isset($pacientes))
        <h3 class="mt-4 text-center">Pacientes Registrados:</h3>
        <div class="list-group">
            @forelse($pacientes as $paciente)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>{{ $paciente->nombre }}</span>
                    <form action="{{ route('tabla-pacientes.show', $paciente->id_paciente) }}" method="GET">
                        <button class="btn btn-info" type="submit">Ver Paciente</button>
                    </form>
                </div>
            @empty
                <div class="list-group-item text-center">No se encontraron pacientes</div>
            @endforelse
        </div>
    @endif
</div>
@endsection
