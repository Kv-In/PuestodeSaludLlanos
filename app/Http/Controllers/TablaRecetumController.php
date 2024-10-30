<?php

namespace App\Http\Controllers;

use App\Models\TablaRecetum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TablaRecetumRequest;
use App\Models\ConsultaFinal;
use App\Models\RecetaFinal;
use App\Models\TablaConsultum;
use App\Models\TablaPaciente;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use Barryvdh\DomPDF\Facade\Pdf;

class TablaRecetumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tablaReceta = TablaRecetum::with('consulta.paciente')->paginate();

        return view('tabla-recetum.index', compact('tablaReceta'))
            ->with('i', ($request->input('page', 1) - 1) * $tablaReceta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create($consultaId): View
    {

        // Obtener la consulta y el paciente asociado
        $tablaRecetum = TablaConsultum::with('paciente')->findOrFail($consultaId);


        $pacientes = TablaPaciente::all(); // Cargar todos los pacientes (si es necesario)

        return view('tabla-recetum.create', [
            'tablaRecetum' => $tablaRecetum,
            'pacientes' => $pacientes,
            'nombrePaciente' => $tablaRecetum->paciente->nombre, // Nombre del paciente
            'dpiPaciente' => $tablaRecetum->paciente->dpi_cui, // CUI o DPI del paciente
            'tratamientoconsulta' => $tablaRecetum->tratamiento, // CUI o DPI del paciente
            'firma_medica' => $tablaRecetum->firma_medica, // CUI o DPI del paciente
            

        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(TablaRecetumRequest $request): RedirectResponse
    {
        // Crear la receta en la tabla `recetas`
        $receta = TablaRecetum::create($request->validated());

        // Verificar que la receta fue creada correctamente
        if ($receta) {
            // Mover la receta a la tabla final `receta_final` con estado 'pendiente'
            RecetaFinal::create([
                'id_receta' => $receta->id_receta,  // ID generado automáticamente
                'estado' => 'pendiente',
            ]);

            return Redirect::route('consultas.pendientes')
                ->with('success', 'Receta creada y movida a farmacia con éxito.');
        }

        return Redirect::back()->withErrors(['error' => 'No se pudo crear la receta.']);
    }


    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        // Cargar la consulta junto con los datos del paciente relacionado
        $tablaRecetum = TablaRecetum::with('paciente')->findOrFail($id);

        // Obtener el id_receta_final de los parámetros de la URL
        $idRecetaFinal = request()->query('id_receta_final');

        return view('tabla-recetum.show', compact('tablaRecetum', 'idRecetaFinal'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pacientes = TablaPaciente::all(); // Obtener todos los pacientes

        $tablaRecetum = TablaRecetum::find($id);

        return view('tabla-recetum.edit', compact('tablaRecetum', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TablaRecetumRequest $request, TablaRecetum $tablaRecetum): RedirectResponse
    {
        $tablaRecetum->update($request->validated());

        return Redirect::route('tabla-receta.index')
            ->with('success', 'TablaRecetum updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TablaRecetum::find($id)->delete();

        return Redirect::route('tabla-receta.index')
            ->with('success', 'TablaRecetum deleted successfully');
    }

    // vista de recetas pendeintes 
    public function listarPendientes(): View
    {
        // Obtener las consultas finales con estado 'pendiente'
        $recetasFinales = RecetaFinal::where('estado', 'pendiente')->get();

        // Retornar la vista de consultas pendientes
        return view('tabla-recetum.receta_final', compact('recetasFinales'));
    }


    public function entregarMedicamento($id)
    {
        // Busca la receta en la tabla 'RecetaFinal' usando el ID
        $receta = RecetaFinal::findOrFail($id);

        // Cambia el estado a "finalizado"
        $receta->estado = 'finalizado';
        $receta->save();

        // Redirige a la lista de recetas pendientes con un mensaje de éxito
        return redirect()->route('recetas.pendientes')->with('success', 'Medicamentos entregados');
    }

    public function generarPdf($id)
    {
        // Obtener la receta por ID
        $tablaRecetum = TablaRecetum::with('consulta.paciente')->findOrFail($id);

        // Cargar la vista y pasar los datos
        $pdf = PDF::loadView('tabla-recetum.pdf', compact('tablaRecetum'));

        // Descargar el PDF
        return $pdf->download('receta_' . $tablaRecetum->id_receta . '.pdf');
    }

}
