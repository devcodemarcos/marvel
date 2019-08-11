@extends('layout.master')

@section('title', 'DETALLE DEL COMIC')

@section('content')

<div id="main">
        <div class="inner">
            @if(count($inventario) > 0)
            <h1>De venta en</h1>
            <ul>
            @foreach ($inventario as $sucursal)
                <li><a href="#">{{ $sucursal->sucursal->nombre }}</a></li>
            @endforeach
            </ul>
            @else
            <p>No disponible en tienda todavía</p>
            @endif
            <!-- Image -->
                <section>
                    <h3>{{ $comic->title }}</h3>
                    <p>
                        <span class="image left">
                            <img src="{{ $comic->thumbnail->path . '/standard_fantastic.' . $comic->thumbnail->extension }}" alt="">
                        </span>
                        {!! $comic->description != '' ? $comic->description : '<b>No disponible</b><br/>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A ab consectetur veritatis alias? Amet, dicta distinctio similique quam, hic magnam iste iusto voluptatem consequuntur ipsa optio consequatur sed, cupiditate deserunt.' !!}
                    </p>
                    <p>Número de páginas: <b>{{ (int)$comic->pageCount > 0 ? $comic->pageCount : 'No disponible' }}</b></p>
                    <hr>
                    <h3>Personajes que aparecen en el comic</h3>
                    <ul class="alt">
                        @if(count($personajes) > 0)
                            @foreach ($personajes as $personaje)
                                <li><img src="{{ $personaje->thumbnail->path . '/standard_small.' . $personaje->thumbnail->extension }}" alt="image not found"> {{ $personaje->name }}</li>
                            @endforeach
                        @else
                        <li>Lista de personajes no disponible</li>
                        @endif
                    </ul>

                    <a href="#" onclick="window.history.back()" class="button primary left">Regresar</a>
                </section>
        </div>
    </div>

@endsection