@extends('layout.master')

@section('title', 'SUCURSALES')

@section('content')

<div id="main">
    <div class="inner">
        <h1>MARVEL</h1>
        <span class="image main"><img src="{{ asset('images/wallpaper.gif') }}" alt="" /></span>
        <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
        <section>
            <h3>Sucursales de México</h3>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre de la sucursal</th>
                            <th>Dirección</th>
                            <th>Información completa</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($sucursales as $index => $sucursal)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $sucursal->nombre }}</td>
                        <td>{{ $sucursal->direccion }}</td>
                        <td><a href="{{ url('/sucursal/' . $sucursal->id . '/comics') }}">Más info</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
    
@endsection