@extends('layout.categorieslayout')
@section('title', $subcategorias->nombre) <!--Personaliza el título del conenido de la página-->
@section('content')
    <div class="container-fluid bg-light">
                <!--  Panel Central -->
                <div class="mt-4 col-lg-10 pt-3">
                    <!-- Banner Superior para promos -->
                    <div class="row pl-1 pr-1">
                        <div class="boxed bg-orange p-5">
                            <div class=" row justify-content-between align-items-center text-center text-md-left">
                                <div class="col-md-3">
                                    <h4>Get in touch.</h4>
                                </div>
                                <div class="col-md-6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="col-md-3 text-lg-right">
                                    <a href="" class="btn btn-danger btn-rounded px-5">Contáctanos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Paneles  -->
                    <div class="tab-content" id="component-1">
                        <!-- Vista Boxes  -->
                        <div class="tab-pane show active d-none d-sm-block" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
                            @foreach($productos->productos as $producto)
                                <div class="boxed gutter-1 bg-white rising">
                                    <div class="row justify-content-between align-items-center text-center text-md-left">
                                        <!-- Imagen de portada -->
                                        <div class="col-lg-3 col-xl-2">
                                            <img src="{{ $producto->img_portada }}" alt="Producto" >
                                        </div>
                                        <!-- Contenido de la ficha -->
                                        <div class="col-lg-9 col-xl-10">
                                            <div class="pr-5">
                                                <a href="{{ url("/productos/$producto->producto_id") }}"><h5 class="text-black" data-placement="top" title="{{ str_replace(" / ",", ",$producto->titulo) }}">{{ strlen(str_replace(" / ",", ",$producto->titulo)) > 90 ? substr(str_replace(" / ",", ",$producto->titulo), 0, 87).' ...':str_replace(" / ",", ",$producto->titulo) }}</h5></a>
                                            </div>
                                            <div class="row pt-1">
                                                <!-- Seección 1 -->
                                                <div class=" d-block col-lg-4 col-xl-6">
                                                    <ul class="list-group list-group-minimal">
                                                        <li class="list-group-item d-flex">
                                                            <small class="text-gray">{{ $producto->modelo }}</small>
                                                        </li>
                                                        <li class="list-group-item d-flex">
                                                            <small class="text-twitter">{{ strlen($producto->marca) > 20 ? substr($producto->marca, 0, 17):$producto->marca }}</small>
                                                        </li>
                                                        <li class="list-group-item ">
                                                            <a href="" >
                                                                <small class="text-tumblr mt-0">¿Preguntas?</small>
                                                            </a>
                                                        </li>
                                                        <li class="list-group-item d-flex ">
                                                            <a href="">
                                                                <small>Opiniones</small><br>
                                                                <p class="text-yellow icon-star"></p>
                                                                <p class="text-yellow icon-star"></p>
                                                                <p class="text-yellow icon-star"></p>
                                                                <p class="text-yellow icon-star"></p>
                                                                <p class="text-yellow icon-star-half-empty pl-0"></p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Seección 2 -->
                                                <div class="col-sm text-sm-left text-lg-right">

                                                </div>
                                                <!-- Seección 3 -->
                                                <div class="col-sm text-sm-left text-lg-right">
                                                    <ul class="list-group list-group-minimal">
                                                        <li class="list-group-item d-flex">
                                                            <del class="ml-auto text-black-50">${{ number_format( round($producto->precios->precio_lista * $tipocambio->normal * 1.1 * 1.16), 2,'.',',' ) }}</del>
                                                        </li>
                                                        <li class="list-group-item d-flex">
                                                            <h5 class="text-blue-bm font-weight-normal ml-auto"> ${{ number_format( round($producto->precios->precio_descuento * $tipocambio->normal * 1.1 * 1.16), 2,'.',',' ) }} </h5>
                                                        </li>
                                                        <li class="list-group-item d-flex">
                                                            <small class="ml-auto text-danger">Envío $149.00</small>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Seección 4 -->
                                                <div class="col-sm text-sm-left">
                                                    <ul class="list-group list-group-minimal">
                                                        <li class="list-group-item d-flex">
                                                            <a href="#" class="btn btn-warning btn-sm ml-0 text-wrap" style="padding: .1rem .1rem .1rem; height: 25px; font-size: 15px;">Añade<ion-icon name="cart" style="padding-top: 1px;"></ion-icon></a>
                                                        </li>
                                                        <li class="list-group-item d-block">
                                                            <small class="ml-auto text-gray"> <span style="padding: .3rem .3rem .3rem; height: 20px;" class="badge badge-green justify-content-start" style="
                                                                padding-top: 4px;
                                                                width: 50px;
                                                                height: 19px;
                                                                font-size: 11px;">{{ $producto->existencia->nuevo == '500'? '+'.$producto->existencia->nuevo: $producto->existencia->nuevo }}</span> Disponibles
                                                            </small>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </div>
                        <!-- Vista Cards  -->
                        <div class="tab-pane d-block " id="component-1-2" role="tabpanel" aria-labelledby="component-1-2">
                            <ul class="masonry gutter-2">
                                @foreach($productos->productos as $producto)
                                    <li class="col-md-6 col-lg-4 col-xl-3">
                                        <a href="{{ url("productos/$producto->producto_id") }}">
                                    <div class="card rising">
                                        <img class="card-img-top" src="{{ $producto->img_portada }}" alt="Producto" >
                                        <div class="card-body ">
                                            <ul class="list-group list-group-minimal">
                                                <li class="list-group-item" style="height: 73px;">
                                                    <a href="productos/{{ $producto->producto_id }}"><small class="text-black" data-placement="top" title="{{ str_replace(" / ",", ",$producto->titulo) }}">{{ strlen(str_replace(" / ",", ",$producto->titulo)) > 78 ? substr(str_replace(" / ",", ",$producto->titulo), 0, 75).' ...':str_replace(" / ",", ",$producto->titulo) }}</small></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <small class="text-gray">{{ $producto->modelo }}</small><br>
                                                    <small class="text-twitter">{{ strlen($producto->marca) > 20 ? substr($producto->marca, 0, 17):$producto->marca }}</small>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <del class="ml-auto text-black-50">${{ number_format( round($producto->precios->precio_lista * $tipocambio->normal * 1.1 * 1.16), 2,'.',',' ) }}</del>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <a href="#" class="btn btn-warning btn-sm ml-0 text-wrap" style="padding: .1rem .1rem .1rem; height: 25px; font-size: 15px;">Añade<ion-icon name="cart" style="padding-top: 1px;"></ion-icon></a>
                                                    <h5 class="text-blue-bm font-weight-normal ml-auto"> ${{ number_format( round($producto->precios->precio_descuento * $tipocambio->normal * 1.1 * 1.16), 2,'.',',' ) }} </h5>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <a href="">
                                                        <small class="text-tumblr" style="font-size: 11px">¿Preguntas?</small>
                                                    </a>
                                                    <small class="ml-auto text-gray">Disponibles <span style="padding: .3rem .3rem .3rem; height: 20px;" class="badge badge-green justify-content-start" style="
                                                        padding-top: 4px;
                                                        width: 50px;
                                                        height: 19px;
                                                        font-size: 11px;">{{ $producto->existencia->nuevo == '500'? '+'.$producto->existencia->nuevo: $producto->existencia->nuevo }}</span></small>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <a href="">
                                                        <small style="font-size: 11px">Opiniones</small><br>
                                                        <p class="text-yellow icon-star"></p>
                                                        <p class="text-yellow icon-star"></p>
                                                        <p class="text-yellow icon-star"></p>
                                                        <p class="text-yellow icon-star"></p>
                                                        <p class="text-yellow icon-star-half-empty pl-0"></p>
                                                    </a>
                                                    <small class="ml-auto text-danger">Envío $149.00</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Baner lateral para promos -->
                <div class="bg-orange col-2 pt-3 card">
                    Promoción
                </div>
            </div>
@endsection

