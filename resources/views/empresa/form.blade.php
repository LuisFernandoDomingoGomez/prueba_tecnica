<div class="box box-info p-4">
    <div class="box-body">
        <div class="mb-4">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $empresa->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt-4">
        <div class="float-right">
            <a href="{{ route('empresas.index') }}" class="btn btn-danger mr-2">{{ __('Regresar') }}</a>
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/utvt/js/carrera-form.js"></script>