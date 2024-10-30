<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_control" class="form-label">{{ __('Id Control') }}</label>
            <input type="text" name="id_control" class="form-control @error('id_control') is-invalid @enderror" value="{{ old('id_control', $tablaRegistroControl?->id_control) }}" id="id_control" placeholder="Id Control">
            {!! $errors->first('id_control', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_paciente" class="form-label">{{ __('Id Paciente') }}</label>
            <input type="text" name="id_paciente" class="form-control @error('id_paciente') is-invalid @enderror" value="{{ old('id_paciente', $tablaRegistroControl?->id_paciente) }}" id="id_paciente" placeholder="Id Paciente">
            {!! $errors->first('id_paciente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_insumo" class="form-label">{{ __('Id Insumo') }}</label>
            <input type="text" name="id_insumo" class="form-control @error('id_insumo') is-invalid @enderror" value="{{ old('id_insumo', $tablaRegistroControl?->id_insumo) }}" id="id_insumo" placeholder="Id Insumo">
            {!! $errors->first('id_insumo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="medicamento" class="form-label">{{ __('Medicamento') }}</label>
            <input type="text" name="medicamento" class="form-control @error('medicamento') is-invalid @enderror" value="{{ old('medicamento', $tablaRegistroControl?->medicamento) }}" id="medicamento" placeholder="Medicamento">
            {!! $errors->first('medicamento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_entregada" class="form-label">{{ __('Cantidad Entregada') }}</label>
            <input type="text" name="cantidad_entregada" class="form-control @error('cantidad_entregada') is-invalid @enderror" value="{{ old('cantidad_entregada', $tablaRegistroControl?->cantidad_entregada) }}" id="cantidad_entregada" placeholder="Cantidad Entregada">
            {!! $errors->first('cantidad_entregada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_consulta" class="form-label">{{ __('Fecha Consulta') }}</label>
            <input type="date" name="fecha_consulta" class="form-control @error('fecha_consulta') is-invalid @enderror" value="{{ old('fecha_consulta', $tablaRegistroControl?->fecha_consulta) }}" id="fecha_consulta" placeholder="Fecha Consulta">
            {!! $errors->first('fecha_consulta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>