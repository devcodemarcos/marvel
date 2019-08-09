@php
$path = Request::path()
@endphp
<form method="post" action="{{ $action }}" autocomplete="off">
        {{ csrf_field() }}
        @if($path != 'sucursal/registro')
        <input type="hidden" name="id" value="{{ $sucursal->id }}">
        @endif
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="nombre" value="{{ $path == 'sucursal/registro' ? old('nombre') : $sucursal->nombre }}" placeholder="Nombre de la sucursal" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="direccion" value="{{ $path == 'sucursal/registro' ? old('direccion') : $sucursal->direccion }}" placeholder="Dirección de la sucursal" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="horario" value="{{ $path == 'sucursal/registro' ? old('horario') : $sucursal->horario }}" placeholder="Horario" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="telefono" value="{{ $path == 'sucursal/registro' ? old('telefono') : $sucursal->telefono }}" placeholder="Teléfono" />
            </div>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="{{ $txt_btn }}" class="primary" /></li>
                    <li><a href="{{ url('/') }}" class="button">Cancelar</a></li>
                </ul>
            </div>
        </div>
    </form>