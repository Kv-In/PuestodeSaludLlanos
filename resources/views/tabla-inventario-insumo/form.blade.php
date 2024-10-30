<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_insumo" class="form-label">{{ __('Id Insumo') }}</label>
            <input type="text" name="id_insumo" class="form-control @error('id_insumo') is-invalid @enderror" value="{{ old('id_insumo', $tablaInventarioInsumo?->id_insumo) }}" id="id_insumo" placeholder="Id Insumo">
            {!! $errors->first('id_insumo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $tablaInventarioInsumo?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_existente" class="form-label">{{ __('Cantidad Existente') }}</label>
            <input type="text" name="cantidad_existente" class="form-control @error('cantidad_existente') is-invalid @enderror" value="{{ old('cantidad_existente', $tablaInventarioInsumo?->cantidad_existente) }}" id="cantidad_existente" placeholder="Cantidad Existente">
            {!! $errors->first('cantidad_existente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_entregada" class="form-label">{{ __('Cantidad Entregada') }}</label>
            <input type="text" name="cantidad_entregada" class="form-control @error('cantidad_entregada') is-invalid @enderror" value="{{ old('cantidad_entregada', $tablaInventarioInsumo?->cantidad_entregada) }}" id="cantidad_entregada" placeholder="Cantidad Entregada">
            {!! $errors->first('cantidad_entregada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="saldo" class="form-label">{{ __('Saldo') }}</label>
            <input type="text" name="saldo" class="form-control @error('saldo') is-invalid @enderror" value="{{ old('saldo', $tablaInventarioInsumo?->saldo) }}" id="saldo" placeholder="Saldo">
            {!! $errors->first('saldo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_vencimiento" class="form-label">{{ __('Fecha Vencimiento') }}</label>
            <input type="date" name="fecha_vencimiento" class="form-control @error('fecha_vencimiento') is-invalid @enderror" value="{{ old('fecha_vencimiento', $tablaInventarioInsumo?->fecha_vencimiento) }}" id="fecha_vencimiento" placeholder="Fecha Vencimiento">
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_recepcion" class="form-label">{{ __('Fecha Recepcion') }}</label>
            <input type="date" name="fecha_recepcion" class="form-control @error('fecha_recepcion') is-invalid @enderror" value="{{ old('fecha_recepcion', $tablaInventarioInsumo?->fecha_recepcion) }}" id="fecha_recepcion" placeholder="Fecha Recepcion">
            {!! $errors->first('fecha_recepcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>