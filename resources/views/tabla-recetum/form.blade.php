<div class="row padding-1 p-1">
    <div class="col-md-12">
        <!-- Campo oculto para el ID de la consulta -->
        <input type="hidden" name="id_consulta" value="{{ $tablaRecetum->id_consulta ?? '' }}">

        <!-- Nombre del Paciente -->
        <div class="form-group mb-2 mb20">
            <label for="nombre_paciente" class="form-label">{{ __('Nombre del Paciente') }}</label>
            <input type="text" name="nombre_paciente" class="form-control" value="{{ $nombrePaciente }}" id="nombre_paciente" readonly>
        </div>

        <!-- DPI Paciente -->
        <div class="form-group mb-2 mb20">
            <label for="dpi_paciente" class="form-label">{{ __('DPI Paciente') }}</label>
            <input type="text" name="dpi_paciente" class="form-control" value="{{ $dpiPaciente }}" id="dpi_paciente" readonly>
        </div>

    
        <!-- Fecha Emisión -->
        <div class="form-group mb-2 mb20">
            <label for="fecha_emision" class="form-label">{{ __('Fecha Emisión') }}</label>
            <input type="date" name="fecha_emision" class="form-control @error('fecha_emision') is-invalid @enderror" 
                value="{{ old('fecha_emision', $tablaRecetum?->fecha_emision ?? now()->format('Y-m-d')) }}" 
                id="fecha_emision" placeholder="Fecha Emisión">
            {!! $errors->first('fecha_emision', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

  
        <div class="form-group mb-2 mb20">
    <label for="contenido_receta" class="form-label">{{ __('Medicamento recetado') }}</label>
    <input type="text" name="contenido_receta" 
           class="form-control @error('contenido_receta') is-invalid @enderror" 
           value="{{ old('contenido_receta', $tablaRecetum?->tratamiento ?? $tablaRecetum?->contenido_receta) }}" 
           id="contenido_receta" placeholder="Contenido Receta">
    {!! $errors->first('contenido_receta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>

   <!-- Firma -->
     
<div class="form-group mb-2 mb20">
    <label for="firma" class="form-label">{{ __('Doctor') }}</label>
    <input type="text" name="firma" 
           class="form-control @error('firma') is-invalid @enderror" 
           value="{{ old('firma', $tablaRecetum?->firma_medica ??  $tablaRecetum?->firma) }}" 
           id="firma" placeholder="Firma">
    {!! $errors->first('firma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>
     

        <!-- Sello -->
        <div class="form-group mb-2 mb20">
            <label for="sello" class="form-label">{{ __('Sello') }}</label>
            <input type="text" name="sello" class="form-control @error('sello') is-invalid @enderror" value="{{ old('sello', $tablaRecetum?->sello) }}" id="sello" placeholder="Sello">
            {!! $errors->first('sello', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Crear Receta') }}</button>
    </div>
</div>
