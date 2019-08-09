@extends('layout.master')

@section('title', 'LISTA DE COMICS')

@section('content')

<div id="main">
        <div class="inner">
            <header>
                <h1>Sucursal {{ $sucursal->nombre }}</h1>
                <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
            </header>
            <section class="tiles">
                @foreach ($data as $index => $comic)
                <article class="style{{ ++$index }}">
                    <span class="image">
                        <img src="{{ $comic->thumbnail->path . '/standard_fantastic.' . $comic->thumbnail->extension }}" alt="">
                    </span>
                    <a href="{{ url('/comic/' . $comic->id) }}">
                        <h2>{{ $comic->title }}</h2>
                        <div class="content">
                            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                        </div>
                    </a>
                </article>
                @endforeach
            </section>
        </div>
    </div>

@endsection