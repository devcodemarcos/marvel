@extends('layout.master')

@section('title', 'EDITAR INFORMACIÓN')

@section('content')

<div id="main">
    <div class="inner">
        <section>
            @if (session('status'))
                <blockquote>
                    {{ session('status') }}
                </blockquote>
            @endif
            <h2>Editar información</h2>
            
            @include('sucursal/formulario', ['action' => url('/sucursal/editar'), 'txt_btn' => 'Actualizar'])

            <p>
                <form action="{{ url('/sucursal/' . $sucursal->id . '/eliminar') }}" method="POST" id="frm-elimina-sucursal">
                    {{ @csrf_field() }}
                    <button type="button" id="btn-delete-sucursal">Eliminar Sucursal</button>
                </form>
            </p>
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

@section('javascript')
<script>
    let frm = document.getElementById('frm-elimina-sucursal');
    let btn = document.getElementById('btn-delete-sucursal');
    btn.addEventListener('click', function() {
        let status = confirm('¿Estas seguro eliminar esta sucursal?');
        if(status) {
            frm.submit();
        }
    });
</script>
@endsection