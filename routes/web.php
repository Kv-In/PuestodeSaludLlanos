<?php

use App\Http\Controllers\TablaAntecedenteController;
use App\Http\Controllers\TablaConsultumController;
use App\Http\Controllers\TablaPacienteController;
use App\Http\Controllers\TablaRecetumController;
use App\Http\Controllers\TablaRegistroControlController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\Usercontroller;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TablaInventarioInsumoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('users', [Usercontroller::class, 'index'])->name('admin.users');
Route::get('users/{user}', [Usercontroller::class, 'edit'])->name('admin.users.edit');
Route::put('users/{user}', [Usercontroller::class, 'update'])->name('admin.users.update');

Route::resource('tabla-pacientes', TablaPacienteController::class)->names('tabla-pacientes');
Route::resource('tabla-inventario-insumos', TablaInventarioInsumoController::class)->names('tabla-inventario-insumos');
Route::resource('tabla-consulta', TablaConsultumController::class)->names('tabla-consulta');
Route::resource('tabla-antecedentes', TablaAntecedenteController::class)->names('tabla-antecedentes');
Route::resource('tabla-registro-controls', TablaRegistroControlController::class)->names('tabla-registro-controls');
Route::resource('tabla-receta', TablaRecetumController::class)->names('tabla-receta');

Route::get('/pacientes/buscar', [TablaPacienteController::class, 'buscar'])->name('pacientes.buscar');

Route::get('/consultas/crear/{id_paciente}', [TablaConsultumController::class, 'create'])->name('consulta.create');
Route::get('/tabla-pacientes/{id_paciente}', [TablaPacienteController::class, 'show'])->name('tabla-pacientes.show');

//consulta final
Route::get('/consultas/pendientes', [TablaConsultumController::class, 'listarPendientes'])->name('consultas.pendientes');

Route::get('/tabla-consulta/{id_consulta}', [TablaPacienteController::class, 'show'])->name('tabla-consulta.show');
// Crear receta
//Route::get('/recetas/crear/{id_consulta}', [TablaRecetumController::class, 'create'])->name('receta.create');
Route::get('/tabla-receta/create/{id_consulta}', [TablaRecetumController::class, 'create'])->name('receta.create');

// editar consulta
Route::get('/tabla-consulta/edit/{id}', [TablaConsultumController::class, 'edit'])->name('editar.consulta');

// receta final
Route::get('/recetas/pendientes', [TablaRecetumController::class, 'listarPendientes'])->name('recetas.pendientes');


// entregar medicamento
Route::post('/recetas/entregar/{id}', [TablaRecetumController::class, 'entregarMedicamento'])->name('medicamento.entregar');


// historial del paciente
Route::get('/paciente/consultas/{id}', [TablaConsultumController::class, 'historial'])->name('paciente.consultas');

// Generar PDF de receta
Route::get('/receta/pdf/{id}', [TablaRecetumController::class, 'generarPdf'])->name('receta.pdf');

// Generar grafica reporte
Route::get('/reportes/consultas-diarias', [TablaConsultumController::class, 'consultasDiarias'])->name('reportes.consultasDiarias');

// Ruta para finalizar una consulta
Route::post('/consultas/{id}/finalizar', [TablaConsultumController::class, 'finalizar'])
    ->name('consultas.finalizar');

Route::get('/', function () {
    return view('Inicio');
})->name('Inicio');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

