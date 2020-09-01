@extends('layout.categorieslayout')
@section('content')
@section('title', $subcategorias->nombre) <!--Personaliza el título del conenido de la página-->
<!-- contenido html aquí -->
    <section class="bg-light">
        <div class="container-flud">
            <div class="row">
                <aside class="col-md-3 col-lg-2 pl-lg-3">
                    <div class="widget">
                        <span class="mt-4 widget-title">Categorías</span>
                        <div class="list-group list-group-categories list-group-minimal">
                            @foreach($subcategorias->subcategorias as $subgategoria)
                                <a href="/{{ $subgategoria->id }}" class="small list-group-item d-flex justify-content-between align-items-center">
                                    {{ $subgategoria->nombre }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </aside>
                <div class="col-md-9 pt-3">
                    <ul class="masonry gutter-1">
                        @foreach($productos->productos as $producto)
                        <li class="col-lg-4 col-xl-2">
                            <div class="card">
                                <img class="card-img-top" src="{{ $producto->img_portada }}" alt="Producto" >
                                <div class="card-body">
                                    <ul class="list-group list-group-minimal">
                                        <li class="list-group-item"><small class="text-black">{{ strlen($producto->titulo) > 25 ? substr($producto->titulo, 0, 22).' ...':$producto->titulo }}</small></li>
                                        <li class="list-group-item"><small class="text-gray">{{ $producto->modelo }}</small></li>
                                        <li class="list-group-item"><small class="text-gray">{{ strlen($producto->marca) > 20 ? substr($producto->marca, 0, 17):$producto->marca }}</small></li>
                                        <li class="list-group-item"><small class="text-black">Inventario <span class="badge badge-pill badge-success">{{ $producto->existencia->nuevo }}</span></small></li>
                                        <li class="list-group-item"><small class="text-black text-right"> <span class="">${{ $producto->precios->precio_especial }}</span></small></li>
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
