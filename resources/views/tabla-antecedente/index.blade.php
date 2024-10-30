@extends('layouts.app')

@section('template_title')
    Tabla Antecedentes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tabla Antecedentes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tabla-antecedentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Antecedente</th>
									<th >Id Paciente</th>
									<th >Medicos</th>
									<th >Quirurgicos</th>
									<th >Traumaticos</th>
									<th >Alergicos</th>
									<th >Familiares</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tablaAntecedentes as $tablaAntecedente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $tablaAntecedente->id_antecedente }}</td>
										<td >{{ $tablaAntecedente->id_paciente }}</td>
										<td >{{ $tablaAntecedente->medicos }}</td>
										<td >{{ $tablaAntecedente->quirurgicos }}</td>
										<td >{{ $tablaAntecedente->traumaticos }}</td>
										<td >{{ $tablaAntecedente->alergicos }}</td>
										<td >{{ $tablaAntecedente->familiares }}</td>

                                            <td>
                                                <form action="{{ route('tabla-antecedentes.destroy', $tablaAntecedente->id_antecedente) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tabla-antecedentes.show', $tablaAntecedente->id_antecedente) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tabla-antecedentes.edit', $tablaAntecedente->id_antecedente) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tablaAntecedentes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
