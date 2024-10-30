<?php

namespace App\Http\Controllers;

use App\Models\TablaInventarioInsumo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TablaInventarioInsumoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TablaInventarioInsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tablaInventarioInsumos = TablaInventarioInsumo::paginate();

        return view('tabla-inventario-insumo.index', compact('tablaInventarioInsumos'))
            ->with('i', ($request->input('page', 1) - 1) * $tablaInventarioInsumos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tablaInventarioInsumo = new TablaInventarioInsumo();

        return view('tabla-inventario-insumo.create', compact('tablaInventarioInsumo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TablaInventarioInsumoRequest $request): RedirectResponse
    {
        TablaInventarioInsumo::create($request->validated());

        return Redirect::route('tabla-inventario-insumos.index')
            ->with('success', 'TablaInventarioInsumo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tablaInventarioInsumo = TablaInventarioInsumo::find($id);

        return view('tabla-inventario-insumo.show', compact('tablaInventarioInsumo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tablaInventarioInsumo = TablaInventarioInsumo::findOrFail($id);

        return view('tabla-inventario-insumo.edit', compact('tablaInventarioInsumo'));
    }

    /**
     * Update the specified resource in storage.
     */
    
     public function update(TablaInventarioInsumoRequest $request, $id): RedirectResponse
     {
         $tablaInventarioInsumo = TablaInventarioInsumo::findOrFail($id);
         $tablaInventarioInsumo->update($request->validated());
 
         return Redirect::route('tabla-inventario-insumos.index')
             ->with('success', 'Tabla Inventario Insumo actualizado con éxito.');
     }
     public function destroy($id): RedirectResponse
     {
         $tablaInventarioInsumo = TablaInventarioInsumo::findOrFail($id);
 
         if ($tablaInventarioInsumo) {
             $tablaInventarioInsumo->delete();
             return Redirect::route('tabla-inventario-insumos.index')
                 ->with('success', 'Tabla Inventario Insumo eliminado con éxito.');
         }
 
         return Redirect::route('tabla-inventario-insumos.index')
             ->with('error', 'Tabla Inventario Insumo no encontrado.');
     }
}
