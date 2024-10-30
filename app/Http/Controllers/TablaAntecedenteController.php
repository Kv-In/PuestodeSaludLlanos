<?php

namespace App\Http\Controllers;

use App\Models\TablaAntecedente;
use App\Models\TablaPaciente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TablaAntecedenteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TablaAntecedenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tablaAntecedentes = TablaAntecedente::paginate();

        return view('tabla-antecedente.index', compact('tablaAntecedentes'))
            ->with('i', ($request->input('page', 1) - 1) * $tablaAntecedentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pacientes = TablaPaciente::all(); // Obtener todos los pacientes
  
        $tablaAntecedente = new TablaAntecedente();

        return view('tabla-antecedente.create', compact('tablaAntecedente','pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TablaAntecedenteRequest $request): RedirectResponse
    {
        TablaAntecedente::create($request->validated());

        return Redirect::route('tabla-antecedentes.index')
            ->with('success', 'TablaAntecedente created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tablaAntecedente = TablaAntecedente::find($id);

        return view('tabla-antecedente.show', compact('tablaAntecedente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tablaAntecedente = TablaAntecedente::find($id);
        $pacientes = TablaPaciente::all(); // Obtener todos los pacientes
  

        return view('tabla-antecedente.edit', compact('tablaAntecedente','pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TablaAntecedenteRequest $request, TablaAntecedente $tablaAntecedente): RedirectResponse
    {
        $tablaAntecedente->update($request->validated());

        return Redirect::route('tabla-antecedentes.index')
            ->with('success', 'TablaAntecedente updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TablaAntecedente::find($id)->delete();

        return Redirect::route('tabla-antecedentes.index')
            ->with('success', 'TablaAntecedente deleted successfully');
    }
}
