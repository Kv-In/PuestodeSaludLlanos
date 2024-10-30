<?php

namespace App\Http\Controllers;

use App\Models\TablaPaciente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TablaPacienteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TablaPacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tablaPacientes = TablaPaciente::paginate();

        return view('tabla-paciente.index', compact('tablaPacientes'))
            ->with('i', ($request->input('page', 1) - 1) * $tablaPacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tablaPaciente = new TablaPaciente();

        return view('tabla-paciente.create', compact('tablaPaciente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TablaPacienteRequest $request): RedirectResponse
    {
        // Crear el paciente y guardar en la base de datos
        $paciente = TablaPaciente::create($request->validated());
    
        // Redirigir a la creación de consulta con el id del paciente
        return Redirect::route('consulta.create', $paciente->id_paciente)
            ->with('success', 'Paciente Registrado con Éxito.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tablaPaciente = TablaPaciente::find($id);

        return view('tabla-paciente.show', compact('tablaPaciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tablaPaciente = TablaPaciente::findOrFail($id);

        return view('tabla-paciente.edit', compact('tablaPaciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TablaPacienteRequest $request, $id): RedirectResponse
    {
        $tablaPaciente = TablaPaciente::findOrFail($id);
        $tablaPaciente->update($request->validated());
    
        return Redirect::route('tabla-pacientes.index')
            ->with('success', 'Tabla Paciente actualizado con éxito.');
    }
    

    public function destroy($id): RedirectResponse
    {
        TablaPaciente::find($id)->delete();

        return Redirect::route('tabla-pacientes.index')
            ->with('success', 'TablaPaciente deleted successfully');
    }

    public function buscar(Request $request)
{
    // Obtener el término de búsqueda desde el formulario
    $termino = $request->input('nombre');

    // Buscar pacientes por nombre o por otro campo
    $pacientes = TablaPaciente::where('nombre', 'LIKE', "%{$termino}%")->get();

    // Retornar la vista con los resultados
    return view('tabla-paciente.buscar_paciente', ['pacientes' => $pacientes]);
}

}
