<div class="box box-info p-4">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('empresa_id', $empresas, null, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => '--Empresa--']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            <button type="button" id="getLocationBtn" class="btn btn-primary">Obtener Ubicación</button>
        </div>

        <div id="locationDisplay"></div><br>

        {{ Form::hidden('latitud', null, ['id' => 'latitud']) }}
        {{ Form::hidden('longitud', null, ['id' => 'longitud']) }}
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

<script>
    document.getElementById('getLocationBtn').addEventListener('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert('Tu navegador no soporta la geolocalización.');
        }
    });

    function showPosition(position) {
        var locationDisplay = document.getElementById('locationDisplay');
        locationDisplay.innerHTML = 'Latitud: ' + position.coords.latitude + '<br>Longitud: ' + position.coords.longitude;

        // Rellenar campos ocultos de formulario con las coordenadas obtenidas
        document.getElementById('latitud').value = position.coords.latitude;
        document.getElementById('longitud').value = position.coords.longitude;
    }
</script>