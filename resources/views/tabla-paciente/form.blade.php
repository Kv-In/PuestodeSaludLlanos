<div class="row padding-1 p-1">
    <div class="col-md-12">
        
     
    <div class="form-row mb-2 mb20"> 
    <div class="form-group col-md-6">
        <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
        <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $tablaPaciente?->nombre) }}" id="nombre" placeholder="Nombre">
        {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <div class="form-group col-md-6">
        <label for="edad" class="form-label">{{ __('Edad') }}</label>
        <input type="text" name="edad" class="form-control @error('edad') is-invalid @enderror" value="{{ old('edad', $tablaPaciente?->edad) }}" id="edad" placeholder="Edad">
        {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
</div>

<div class="form-row mb-2 mb20">
    <div class="form-group col-md-4">
        <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
        <select name="sexo" class="form-control @error('sexo') is-invalid @enderror" id="sexo">
            <option value="" disabled {{ old('sexo', $tablaPaciente?->sexo) === null ? 'selected' : '' }}>Seleccione el sexo</option>
            <option value="Masculino" {{ old('sexo', $tablaPaciente?->sexo) === 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Femenino" {{ old('sexo', $tablaPaciente?->sexo) === 'Femenino' ? 'selected' : '' }}>Femenino</option>
        </select>
        {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <div class="form-group col-md-4">
    <label for="estado_civil" class="form-label">{{ __('Estado Civil') }}</label>
    <select name="estado_civil" class="form-control @error('estado_civil') is-invalid @enderror" id="estado_civil">
        <option value="" disabled selected>Selecciona el estado civil</option>
        <option value="Soltero" {{ old('estado_civil', $tablaPaciente?->estado_civil) == 'Soltero' ? 'selected' : '' }}>Soltero</option>
        <option value="Casado" {{ old('estado_civil', $tablaPaciente?->estado_civil) == 'Casado' ? 'selected' : '' }}>Casado</option>
    </select>
    {!! $errors->first('estado_civil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>


    <div class="form-group col-md-4">
        <label for="etnia" class="form-label">{{ __('Etnia') }}</label>
        <select name="etnia" class="form-control @error('etnia') is-invalid @enderror" id="etnia">
            <option value="" disabled {{ old('etnia', $tablaPaciente?->etnia) === null ? 'selected' : '' }}>Seleccione su etnia</option>
            <option value="Maya" {{ old('etnia', $tablaPaciente?->etnia) === 'Maya' ? 'selected' : '' }}>Maya</option>
            <option value="Xinka" {{ old('etnia', $tablaPaciente?->etnia) === 'Xinka' ? 'selected' : '' }}>Xinka</option>
            <option value="Garífuna" {{ old('etnia', $tablaPaciente?->etnia) === 'Garífuna' ? 'selected' : '' }}>Garífuna</option>
            <option value="Ladino" {{ old('etnia', $tablaPaciente?->etnia) === 'Ladino' ? 'selected' : '' }}>Ladino</option>
            <option value="Otro" {{ old('etnia', $tablaPaciente?->etnia) === 'Otro' ? 'selected' : '' }}>Otro</option>
        </select>
        {!! $errors->first('etnia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
</div>

<div class="form-row mb-2 mb20"> 
<div class="form-group col-md-4">
            <label for="puesto_servicio" class="form-label">{{ __('Puesto Servicio') }}</label>
            <input type="text" name="puesto_servicio" class="form-control @error('puesto_servicio') is-invalid @enderror" value="{{ old('puesto_servicio', $tablaPaciente?->puesto_servicio) }}" id="puesto_servicio" placeholder="Puesto Servicio">
            {!! $errors->first('puesto_servicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group col-md-4">
            <label for="region_presupuestario" class="form-label">{{ __('Region Presupuestario') }}</label>
            <input type="text" name="region_presupuestario" class="form-control @error('region_presupuestario') is-invalid @enderror" value="{{ old('region_presupuestario', $tablaPaciente?->region_presupuestario) }}" id="region_presupuestario" placeholder="Region Presupuestario">
            {!! $errors->first('region_presupuestario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group col-md-4">
            <label for="unidad_administrativa" class="form-label">{{ __('Unidad Administrativa') }}</label>
            <input type="text" name="unidad_administrativa" class="form-control @error('unidad_administrativa') is-invalid @enderror" value="{{ old('unidad_administrativa', $tablaPaciente?->unidad_administrativa) }}" id="unidad_administrativa" placeholder="Unidad Administrativa">
            {!! $errors->first('unidad_administrativa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
</div>
      
<div class="form-row mb-2 mb20">
        <div class="form-group col-md-6">
            <label for="dpi_cui" class="form-label">{{ __('Dpi Cui') }}</label>
            <input type="text" name="dpi_cui" class="form-control @error('dpi_cui') is-invalid @enderror" value="{{ old('dpi_cui', $tablaPaciente?->dpi_cui) }}" id="dpi_cui" placeholder="Dpi Cui">
            {!! $errors->first('dpi_cui', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group col-md-6">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $tablaPaciente?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        </div>
        <h4>Contactos de Emergencia</h4>
        <div class="form-row mb-2 mb20">
        <div class="form-group col-md-6">
            <label for="emergencia_nombre" class="form-label">{{ __('Emergencia Nombre') }}</label>
            <input type="text" name="emergencia_nombre" class="form-control @error('emergencia_nombre') is-invalid @enderror" value="{{ old('emergencia_nombre', $tablaPaciente?->emergencia_nombre) }}" id="emergencia_nombre" placeholder="Emergencia Nombre">
            {!! $errors->first('emergencia_nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group col-md-6">
            <label for="emergencia_telefono" class="form-label">{{ __('Emergencia Telefono') }}</label>
            <input type="text" name="emergencia_telefono" class="form-control @error('emergencia_telefono') is-invalid @enderror" value="{{ old('emergencia_telefono', $tablaPaciente?->emergencia_telefono) }}" id="emergencia_telefono" placeholder="Emergencia Telefono">
            {!! $errors->first('emergencia_telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Crear Paciente') }}</button>
    </div>
</div>