@extends('adminlte::page')

@section('title', 'Vista consultas')

@section('template_title')
    Tabla Consulta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tabla Consulta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tabla-consulta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Id Consulta</th>
									<th >Id Paciente</th>
									<th >Fecha</th>
									<th >Motivo Consulta</th>
									<th >Presion Arterial</th>
									<th >Peso</th>
									<th >Diagnostico</th>
									<th >Tratamiento</th>
									<th >Firma Medica</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
    @foreach ($consultasFinales as $consultaFinal)
        <tr>
            <td>{{ ++$i }}</td> <!-- Aquí es donde se usa la variable $i -->
            <td>{{ $consultaFinal->consulta->id_consulta }}</td>
            <td>{{ $consultaFinal->consulta->paciente->nombre }}</td>
            <td>{{ $consultaFinal->consulta->fecha }}</td>
            <td>{{ $consultaFinal->consulta->motivo_consulta }}</td>
            <td>{{ $consultaFinal->consulta->presion_arterial }}</td>
            <td>{{ $consultaFinal->consulta->peso }}</td>
            <td>{{ $consultaFinal->consulta->diagnostico }}</td>
            <td>{{ $consultaFinal->consulta->tratamiento }}</td>
            <td>{{ $consultaFinal->consulta->firma_medica }}</td>
            <td>
                <form action="{{ route('tabla-consulta.destroy', $consultaFinal->consulta->id_consulta) }}" method="POST">
                    <a class="btn btn-sm btn-primary" href="{{ route('tabla-consulta.show', $consultaFinal->consulta->id_consulta) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                    <a class="btn btn-sm btn-success" href="{{ route('tabla-consulta.edit', $consultaFinal->consulta->id_consulta) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

                            </table>
                        </div>
                    </div>
                </div>
                {!! $consultasFinales->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
