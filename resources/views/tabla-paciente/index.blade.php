@extends('adminlte::page')

@section('title', 'Vista Pacientes')

@section('template_title')
    Tabla Pacientes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">

                            <span id="card_title">
                                {{ __('Tabla Pacientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tabla-pacientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
                                    <th>Id Paciente</th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Estado Civil</th>
                                    <th>Etnia</th>
                                    <th>Puesto Servicio</th>
                                    <th>Region Presupuestario</th>
                                    <th>Unidad Administrativa</th>
                                    <th>Dpi Cui</th>
                                    <th>Telefono</th>
                                    <th>Emergencia Nombre</th>
                                    <th>Emergencia Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tablaPacientes as $tablaPaciente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                        <td>{{ $tablaPaciente->id_paciente }}</td>
                                        <td>{{ $tablaPaciente->nombre }}</td>
                                        <td>{{ $tablaPaciente->edad }}</td>
                                        <td>{{ $tablaPaciente->sexo }}</td>
                                        <td>{{ $tablaPaciente->estado_civil }}</td>
                                        <td>{{ $tablaPaciente->etnia }}</td>
                                        <td>{{ $tablaPaciente->puesto_servicio }}</td>
                                        <td>{{ $tablaPaciente->region_presupuestario }}</td>
                                        <td>{{ $tablaPaciente->unidad_administrativa }}</td>
                                        <td>{{ $tablaPaciente->dpi_cui }}</td>
                                        <td>{{ $tablaPaciente->telefono }}</td>
                                        <td>{{ $tablaPaciente->emergencia_nombre }}</td>
                                        <td>{{ $tablaPaciente->emergencia_telefono }}</td>

                                            <td>
                                                <form action="{{ route('tabla-pacientes.destroy', $tablaPaciente->id_paciente) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('tabla-pacientes.show', $tablaPaciente->id_paciente) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tabla-pacientes.edit', $tablaPaciente->id_paciente) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tablaPacientes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const table = document.querySelector('.table-responsive');
            const tableHead = table.querySelector('thead');
            const tableBody = table.querySelector('tbody');

            function adjustTable() {
                const tableWidth = table.offsetWidth;
                const containerWidth = table.parentElement.offsetWidth;

                if (tableWidth > containerWidth) {
                    tableHead.style.display = 'none';
                    tableBody.querySelectorAll('tr').forEach(row => {
                        row.querySelectorAll('td').forEach((cell, index) => {
                            const header = tableHead.querySelectorAll('th')[index];
                            cell.setAttribute('data-label', header.innerText);
                        });
                    });
                } else {
                    tableHead.style.display = '';
                    tableBody.querySelectorAll('td').forEach(cell => {
                        cell.removeAttribute('data-label');
                    });
                }
            }

            window.addEventListener('resize', adjustTable);
            adjustTable();
        });
    </script>
@endsection