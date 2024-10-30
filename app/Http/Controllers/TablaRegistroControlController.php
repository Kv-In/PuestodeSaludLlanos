<?php

namespace App\Http\Controllers;

use App\Models\TablaRegistroControl;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TablaRegistroControlRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TablaRegistroControlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tablaRegistroControls = TablaRegistroControl::paginate();

        return view('tabla-registro-control.index', compact('tablaRegistroControls'))
            ->with('i', ($request->input('page', 1) - 1) * $tablaRegistroControls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tablaRegistroControl = new TablaRegistroControl();

        return view('tabla-registro-control.create', compact('tablaRegistroControl'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TablaRegistroControlRequest $request): RedirectResponse
    {
        TablaRegistroControl::create($request->validated());

        return Redirect::route('tabla-registro-controls.index')
            ->with('success', 'TablaRegistroControl created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tablaRegistroControl = TablaRegistroControl::find($id);

        return view('tabla-registro-control.show', compact('tablaRegistroControl'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tablaRegistroControl = TablaRegistroControl::find($id);

        return view('tabla-registro-control.edit', compact('tablaRegistroControl'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TablaRegistroControlRequest $request, TablaRegistroControl $tablaRegistroControl): RedirectResponse
    {
        $tablaRegistroControl->update($request->validated());

        return Redirect::route('tabla-registro-controls.index')
            ->with('success', 'TablaRegistroControl updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TablaRegistroControl::find($id)->delete();

        return Redirect::route('tabla-registro-controls.index')
            ->with('success', 'TablaRegistroControl deleted successfully');
    }
}
