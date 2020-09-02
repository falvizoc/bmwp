@extends('layout.categorieslayout')
@section('content')
@section('title', $subcategorias->nombre) <!--Personaliza el título del conenido de la página-->
<!-- contenido html aquí -->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <aside class="col-md-2 col-lg-2 pl-lg-3">
                    <div class="widget">
                        <span class="mt-4 widget-title">Categorías</span>
                        <div class="list-group list-group-categories list-group-minimal">
                            @foreach($subcategorias->subcategorias as $subgategoria)
                                <a href="/{{ $subgategoria->id }}" class="small list-group-item d-flex justify-content-between align-items-center">
                                    {{ $subgategoria->nombre }}
                                    <span class="badge">{{ $productos->paginas }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </aside>
                <div class="col-md-9 pt-3">
                    <ul class="masonry gutter-1">
                        @foreach($productos->productos as $producto)
                        <li class="col-md-4 col-lg-3 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ $producto->img_portada }}" alt="Producto" >
                                <div class="card-body ">
                                    <ul class="list-group list-group-minimal">
                                        <li class="list-group-item" style="height: 73px;">
                                            <a href="#"><small class="text-black" data-placement="top" title="{{ $producto->titulo }}">{{ strlen($producto->titulo) > 78 ? substr($producto->titulo, 0, 75).' ...':$producto->titulo }}</small></a>
                                        </li>
                                        <li class="list-group-item">
                                            <small class="text-gray">{{ $producto->modelo }}</small><br>
                                            <small class="text-twitter">{{ strlen($producto->marca) > 20 ? substr($producto->marca, 0, 17):$producto->marca }}</small><br>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <del class="ml-auto text-black-50">${{ number_format( round($producto->precios->precio_lista * $tipocambio->normal * 1.1 * 1.16), 2,'.',',' ) }}</del>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <a href="#" class="btn btn-warning btn-sm ml-0 text-wrap" style="padding: 1.5px .3rem .3rem; height: 23px; font-size: 12px;">Añade<ion-icon name="cart" style="padding-top: 3px;"></ion-icon></a>
                                            <h5 class="text-blue-bm font-weight-normal ml-auto"> ${{ number_format( round($producto->precios->precio_descuento * $tipocambio->normal * 1.1 * 1.16), 2,'.',',' ) }} </h5>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <small class="ml-auto text-danger">Envío $99.00</small>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <small class="ml-auto text-gray">Disponible <span style="padding: .3rem .3rem .3rem; height: 20px;" class="badge badge-green justify-content-start" style="
                                            padding-top: 4px;
                                            width: 50px;
                                            height: 19px;
                                            font-size: 11px;">{{ $producto->existencia->nuevo == '500'? '+'.$producto->existencia->nuevo: $producto->existencia->nuevo }}</span></small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endsection
