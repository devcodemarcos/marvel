@extends('layout.master')

@section('title', 'LISTA DE COMICS')

@section('content')

<div id="main">
        <div class="inner">
            <header>
                <h1>Sucursal {{ $sucursal->nombre }}</h1>
                <p>Horario: <b>{{ $sucursal->horario }}</b></p>
                <p>Teléfono: <b>{{ $sucursal->telefono }}</b></p>
                <p>Dirección: <b>{{ $sucursal->direccion != '' ? $sucursal->direccion : 'Aún no registrada' }}</b></p>
            </header>
            <section>
                    <h3>Lista de comics disponibles</h3>
                    <div class="table-wrapper">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Imagen</th>
                                    <th>Información</th>
                                    <th>Más</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($data) > 0)
                                    @foreach ($data as $index => $comic)
                                    <tr>
                                        <td>
                                            {{ $comic->title }}
                                        </td>
                                        <td>
                                            <img src="{{ $comic->thumbnail->path . '/standard_small.' . $comic->thumbnail->extension }}" alt="">
                                        </td>
                                        <td><a href="{{ url('/comic/' . $comic->id) }}">Ver más</a></td>
                                        <td>
                                            <input type="checkbox" id="verificacion-{{ $index }}" name="verificacion-{{ $index }}" checked >
                                            <label for="verificacion-{{ $index }}"></label>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">Esta tienda no tiene comics</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
            </section>
        </div>
    </div>

@endsection

@section('javascript')
<script>
    let sortTable = function () {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }

    sortTable();
</script>
@endsection