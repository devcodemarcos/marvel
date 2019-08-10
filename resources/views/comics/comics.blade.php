@extends('layout.master')

@section('title', 'LISTA DE COMICS API')

@section('content')

<div id="main">
        <div class="inner">
            <header>
                <h1>Lista de comics</h1>
            </header>

            <section class="tiles">
                @foreach ($comics as $index => $comic)
                @php
                $color = rand(1, 6)
                @endphp
                <article class="style{{ $color }}">
                    <span class="image">
                        <img src="{{ $comic->thumbnail->path . '/standard_fantastic.' . $comic->thumbnail->extension }}" alt="">
                    </span>
                    <a href="{{ url('/comic/' . $comic->id) }}">
                        <h3>{{ $comic->title }}</h3>
                    </a>
                </article>
                @endforeach
            </section>

        </div>
    </div>

@endsection