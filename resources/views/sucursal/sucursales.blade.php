@extends('layout.master')

@section('title', 'SUCURSALES')

@section('content')

<div id="main">
    <div class="inner">
        <h1 class="marvel_logo">MARVEL</h1>
        <span class="image main"><img src="{{ asset('images/wallpaper.gif') }}" alt="" /></span>
        <p>
            Marvel Comics fue fundada por Martin Goodman en 1939, con un número constante de cambios de nombre y fracasos de lanzamiento. 
            Originalmente fue conocida como Red Circle Comics, Atlas Comics; aunque el nombre más popular (antes de Marvel Comics) es Timely Comics y su primera publicación importante fue el Marvel Comics #1 (octubre de 1939) y también por el cual recibe su nombre actual, en el que aparecía por primera vez un superhéroe, el héroe de guerra la Antorcha Humana original y el antihéroe Namor, el hombre submarino. Ambos personajes se convirtieron en grandes éxitos para la compañía protagonizando casi instantáneamente sus propias series. Otro superhéroe popular creado en esas fechas era el personaje patriótico Capitán América.
        </p>
        <section>
            @if (session('status'))
                <blockquote>
                    {{ session('status') }}
                </blockquote>
            @endif
            <h3>Sucursales de México</h3>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre de la sucursal</th>
                            <th>Dirección</th>
                            <th>Lista de comics</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($sucursales) > 0)
                        @foreach ($sucursales as $index => $sucursal)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $sucursal->nombre }}</td>
                            <td>{{ $sucursal->direccion }}</td>
                            <td align="center"><a href="{{ url('/sucursal/' . $sucursal->id . '/comics') }}">Ver</a></td>
                            <td>
                                <a href="{{ url('/sucursal/' . $sucursal->id . '/editar') }}" class="button primary small">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="5">No hay sucursales registradas</td>
                    </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
    
@endsection