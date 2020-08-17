@extends('layout.layout')
@section('title', 'Control de acceso') <!--Personaliza el título del conenido de la página-->
@section('content')
    <!-- contenido html aquí -->
    <section class="pt-15 mt-10">
        @foreach($categorias as $categoria)
            <div class="panel panel-default">
                <div class="panel-body">
                    {{$categoria->nombre}}
                </div>
            </div>
        @endforeach
    </section>

@endsection
