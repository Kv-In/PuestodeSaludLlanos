

<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_antecedente" class="form-label">{{ __('Id Antecedente') }}</label>
            <input type="text" name="id_antecedente" class="form-control @error('id_antecedente') is-invalid @enderror" value="{{ old('id_antecedente', $tablaAntecedente?->id_antecedente) }}" id="id_antecedente" placeholder="Id Antecedente">
            {!! $errors->first('id_antecedente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="row padding-1 p-1">
    <div class="col-md-12">

        <!-- Select para mostrar el nombre de los pacientes -->
        <div class="form-group mb-2 mb20">
            <label for="id_paciente" class="form-label">{{ __('Paciente') }}</label>
            <select name="id_paciente" id="id_paciente" class="form-control @error('id_paciente') is-invalid @enderror">
                <option value="">{{ __('Seleccione un paciente') }}</option>
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}" {{ old('id_paciente', $tablaAntecedente?->id_paciente) == $paciente->id ? 'selected' : '' }}>
                        {{ $paciente->nombre }} <!-- Mostrar el nombre del paciente -->
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_paciente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="medicos" class="form-label">{{ __('Medicos') }}</label>
            <input type="text" name="medicos" class="form-control @error('medicos') is-invalid @enderror" value="{{ old('medicos', $tablaAntecedente?->medicos) }}" id="medicos" placeholder="Medicos">
            {!! $errors->first('medicos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="quirurgicos" class="form-label">{{ __('Quirurgicos') }}</label>
            <input type="text" name="quirurgicos" class="form-control @error('quirurgicos') is-invalid @enderror" value="{{ old('quirurgicos', $tablaAntecedente?->quirurgicos) }}" id="quirurgicos" placeholder="Quirurgicos">
            {!! $errors->first('quirurgicos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="traumaticos" class="form-label">{{ __('Traumaticos') }}</label>
            <input type="text" name="traumaticos" class="form-control @error('traumaticos') is-invalid @enderror" value="{{ old('traumaticos', $tablaAntecedente?->traumaticos) }}" id="traumaticos" placeholder="Traumaticos">
            {!! $errors->first('traumaticos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="alergicos" class="form-label">{{ __('Alergicos') }}</label>
            <input type="text" name="alergicos" class="form-control @error('alergicos') is-invalid @enderror" value="{{ old('alergicos', $tablaAntecedente?->alergicos) }}" id="alergicos" placeholder="Alergicos">
            {!! $errors->first('alergicos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="familiares" class="form-label">{{ __('Familiares') }}</label>
            <input type="text" name="familiares" class="form-control @error('familiares') is-invalid @enderror" value="{{ old('familiares', $tablaAntecedente?->familiares) }}" id="familiares" placeholder="Familiares">
            {!! $errors->first('familiares', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</di>