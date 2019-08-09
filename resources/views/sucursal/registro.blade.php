@extends('layout.master')

@section('title', 'REGISTRO DE SUCURSALES')

@section('content')

<div id="main">
    <div class="inner">
        <section>
            @if (session('status'))
                <blockquote>
                    {{ session('status') }}
                </blockquote>
            @endif
            <h2>Resgistro de nuevas sucursales</h2>
            
            @include('sucursal/formulario', ['action' => url('sucursal/registro'), 'txt_btn' => 'Registrar'])

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:#d60000">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>
    </div>
</div>


@endsection