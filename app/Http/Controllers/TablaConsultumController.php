<?php

namespace App\Http\Controllers;

use App\Models\TablaConsultum;
use App\Models\ConsultaFinal; // Asegúrate de importar el modelo ConsultaFinal
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TablaConsultumRequest;
use App\Models\TablaPaciente;
use App\Models\TablaRecetum;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class TablaConsultumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request): View
{
    // Cargar las consultas finales con la relación de consultas y pacientes
    $consultasFinales = ConsultaFinal::with('consulta.paciente')->paginate();

    return view('tabla-consultum.index', compact('consultasFinales'))
        ->with('i', ($request->input('page', 1) - 1) * $consultasFinales->perPage());
}


    /**
     * Show the form for creating a new resource.
     */
    public function create($id_paciente): View
    {
        // Buscar al paciente por su ID
        $paciente = TablaPaciente::findOrFail($id_paciente);
    
        // Crear una nueva instancia de la consulta
        $tablaConsultum = new TablaConsultum();
    
        // Pasar el paciente y la nueva consulta a la vista
        return view('tabla-consultum.create', compact('tablaConsultum', 'paciente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TablaConsultumRequest $request): RedirectResponse
    {
        // Crear la consulta en la tabla `tabla_consultum`
        $consulta = TablaConsultum::create($request->validated());

        // Verificar que la consulta fue creada correctamente
        if ($consulta) {
            // Mover la consulta a la tabla final `consulta_final` con estado 'pendiente'
            ConsultaFinal::create([
                'id_consulta' => $consulta->id_consulta,  // ID generado automáticamente
                'estado' => 'pendiente',
            ]);

            return Redirect::route('home')
                ->with('success', 'Consulta creada y movida a la tabla final con éxito.');
        }

        return Redirect::back()->withErrors(['error' => 'No se pudo crear la consulta.']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Cargar la consulta junto con los datos del paciente relacionado
        $tablaConsultum = TablaConsultum::with('paciente')->findOrFail($id);
    
        return view('tabla-consultum.show', compact('tablaConsultum'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        // Encuentra el registro en TablaConsultum
        $tablaConsultum = TablaConsultum::findOrFail($id);
    
        // Encuentra el paciente relacionado (asegúrate de tener una relación establecida)
        $paciente = $tablaConsultum->paciente; // Suponiendo que existe una relación 'paciente' en el modelo 'TablaConsultum'
    
        return view('tabla-consultum.edit', compact('tablaConsultum', 'paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TablaConsultumRequest $request, TablaConsultum $tablaConsultum): RedirectResponse
    {
        // Actualiza los datos de TablaConsultum
        $tablaConsultum->update($request->validated());
        
        // Actualiza el estado de la consulta en la tabla final `consulta_final` a 'finalizado'
        $consultaFinal = ConsultaFinal::where('id_consulta', $tablaConsultum->id_consulta)->first();
        
        if ($consultaFinal) {
            $consultaFinal->update(['estado' => 'finalizado']);
        }
    
        // Redirige a la creación de la receta, pasando el ID de la consulta
        return Redirect::route('receta.create', $tablaConsultum->id_consulta)
            ->with('success', 'TablaConsultum updated successfully and status changed to finalized.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        TablaConsultum::find($id)->delete();

        return Redirect::route('tabla-consulta.index')
            ->with('success', 'TablaConsultum deleted successfully');
    }

    public function listarPendientes(): View
    {
        // Obtener las consultas finales con estado 'pendiente'
        $consultasFinales = ConsultaFinal::where('estado', 'pendiente')->get();
        
        // Retornar la vista de consultas pendientes
        return view('tabla-consultum.consulta_final', compact('consultasFinales'));
    }

    public function finalizeConsulta($id)
    {
        // Obtener la consulta correspondiente
        $consulta = ConsultaFinal::findOrFail($id);
    
        // Cambiar el estado de la consulta a "finalizada"
        $consulta->estado = 'finalizada';
        $consulta->save();
    
        // Redirigir al formulario de creación de receta pasando los datos del paciente
        return redirect()->route('receta.create', [
            'id_consulta' => $consulta->id_consulta,
            'nombre_paciente' => $consulta->paciente->nombre,
            'dpi_paciente' => $consulta->paciente->dpi,
        ])->with('success', 'Consulta finalizada. Complete la receta.');
    }
    
    public function historial(Request $request, $id): View
    {
        // Cargar las consultas finales del paciente específico
        $consultasFinales = TablaConsultum::whereHas('consulta', function ($query) use ($id) {
            $query->where('id_paciente', $id); // Filtrar por el id correcto del paciente
        })->with('consulta.paciente')->paginate();
    
        // Obtener el nombre del paciente para mostrarlo en la vista
        $paciente = TablaPaciente::findOrFail($id);
    
        return view('tabla-consultum.historial_paciente', compact('consultasFinales', 'paciente'))
            ->with('i', ($request->input('page', 1) - 1) * $consultasFinales->perPage());
    }
    

    public function consultasDiarias(Request $request)
    {
        $year = $request->input('year', date('Y')); // Año por defecto al año actual
        $month = $request->input('month', date('n')); // Mes por defecto al mes actual
    
        $consultas = DB::table('tabla_consulta')
            ->select(DB::raw('DATE(created_at) as fecha'), DB::raw('COUNT(*) as cantidad'))
            ->whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->groupBy(DB::raw('DATE(created_at)')) // Asegúrate de agrupar por la misma expresión que usas en SELECT
            ->orderBy('fecha') // Opcional: para ordenar los resultados por fecha
            ->get();
        
    
        return view('tabla-consultum.consultas_diarias', compact('consultas'));
    }
    
    
    

}
