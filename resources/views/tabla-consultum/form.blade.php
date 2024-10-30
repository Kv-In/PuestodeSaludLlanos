
<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <!-- Campo oculto para el ID del paciente -->
        <input type="hidden" name="id_paciente" value="{{ $tablaConsultum?->id_paciente ?? $paciente->id_paciente }}">

        <!-- Mostrar el nombre del paciente en lugar del ID -->
        <div class="form-row mb-2 mb20"> 
        <div class="form-group col-md-6">
       
            <label for="nombre_paciente" class="form-label">{{ __('Nombre del Paciente') }}</label>
            <input type="text" name="nombre_paciente" class="form-control" value="{{ $paciente->nombre }}" disabled>
        </div>

        <!-- Resto del formulario -->
        <div class="form-group col-md-6">
    <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
    <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" 
           value="{{ old('fecha', $tablaConsultum?->fecha ?? now()->format('Y-m-d')) }}" 
           id="fecha" placeholder="Fecha">
    {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>

        </div>
        
        <div class="form-row mb-2 mb20"> 
        <div class="form-group col-md-4">
            <label for="motivo_consulta" class="form-label">{{ __('Motivo Consulta') }}</label>
            <input type="text" name="motivo_consulta" class="form-control @error('motivo_consulta') is-invalid @enderror" value="{{ old('motivo_consulta', $tablaConsultum?->motivo_consulta) }}" id="motivo_consulta" placeholder="Motivo Consulta">
            {!! $errors->first('motivo_consulta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group col-md-4">
            <label for="presion_arterial" class="form-label">{{ __('Presion Arterial') }}</label>
            <input type="text" name="presion_arterial" class="form-control @error('presion_arterial') is-invalid @enderror" value="{{ old('presion_arterial', $tablaConsultum?->presion_arterial) }}" id="presion_arterial" placeholder="Presion Arterial">
            {!! $errors->first('presion_arterial', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

        <div class="form-group col-md-4">
            <label for="peso" class="form-label">{{ __('Peso') }}</label>
            <input type="text" name="peso" class="form-control @error('peso') is-invalid @enderror" value="{{ old('peso', $tablaConsultum?->peso) }}" id="peso" placeholder="Peso">
            {!! $errors->first('peso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        </div>

        @if (isset($tablaConsultum->id_consulta))
            <!-- Mostrar estos campos solo si estamos en modo de edición -->
            <div class="form-group mb-2 mb20">
    <label for="diagnostico" class="form-label">{{ __('Diagnostico') }}</label>
    <input type="text" name="diagnostico" class="form-control @error('diagnostico') is-invalid @enderror" 
           value="{{ old('diagnostico', $tablaConsultum?->diagnostico) }}" 
           id="diagnostico" placeholder="Diagnostico" 
           style="width: 100%; height: 60px; font-size: 1rem;"> <!-- Ajusta el ancho y alto según sea necesario -->
    {!! $errors->first('diagnostico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>


            <div class="form-group mb-2 mb20">
                <label for="tratamiento" class="form-label">{{ __('Tratamiento') }}</label>
                <input type="text" name="tratamiento" class="form-control @error('tratamiento') is-invalid @enderror" value="{{ old('tratamiento', $tablaConsultum?->tratamiento) }}" id="tratamiento" placeholder="Tratamiento">
                {!! $errors->first('tratamiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="form-group mb-2 mb20">
                <label for="firma_medica" class="form-label">{{ __('Doctor') }}</label>
                <input type="text" name="firma_medica" class="form-control @error('firma_medica') is-invalid @enderror" value="{{ old('firma_medica', $tablaConsultum?->firma_medica) }}" id="firma_medica" placeholder="Firma Medica">
                {!! $errors->first('firma_medica', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

                  @endif

    </div>
    <div class="col-md-12 mt-4">
        <button type="submit" class="btn btn-success btn-block">{{ __('Registrar Consulta') }}</button>
    </div>
</div>
