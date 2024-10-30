@extends('layouts.app')

@section('template_title')
    Tabla Inventario Insumos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tabla Inventario Insumos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tabla-inventario-insumos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Insumo</th>
									<th >Nombre</th>
									<th >Cantidad Existente</th>
									<th >Cantidad Entregada</th>
									<th >Saldo</th>
									<th >Fecha Vencimiento</th>
									<th >Fecha Recepcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tablaInventarioInsumos as $tablaInventarioInsumo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $tablaInventarioInsumo->id_insumo }}</td>
										<td >{{ $tablaInventarioInsumo->nombre }}</td>
										<td >{{ $tablaInventarioInsumo->cantidad_existente }}</td>
										<td >{{ $tablaInventarioInsumo->cantidad_entregada }}</td>
										<td >{{ $tablaInventarioInsumo->saldo }}</td>
										<td >{{ $tablaInventarioInsumo->fecha_vencimiento }}</td>
										<td >{{ $tablaInventarioInsumo->fecha_recepcion }}</td>

                                            <td>
                                                <form action="{{ route('tabla-inventario-insumos.destroy', $tablaInventarioInsumo->id_insumo) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tabla-inventario-insumos.show', $tablaInventarioInsumo->id_insumo) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tabla-inventario-insumos.edit', $tablaInventarioInsumo->id_insumo) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tablaInventarioInsumos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
