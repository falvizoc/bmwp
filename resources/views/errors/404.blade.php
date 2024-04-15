@extends('layout.layout')
@section('title', 'Ups! Esta ruta no existe ') <!--Personaliza el título del contenido de la página-->
@section('content')
    <section class="bg-blue-bm">
        <div class="container bg-blue-bm  text-center">
                <p class="display-1 text-white">Oops, hemos encontrado un callejón sin salida.</p>
                <p class="lead text-white">La página que intentas alcanzar no está disponible, pero tenemos muchas otras páginas llenas de información útil.
                    <br>Regresa a la página principal para seguir explorando.
                    <br>Haz click <u><a href="{{'//bitmovil.mx'}}">aquí</a></u> para regresar.</p>
        </div>
    </section>
@endsection
