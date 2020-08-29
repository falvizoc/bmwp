<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.partials.head')
@yield('recaptcha')
<!-- IMPORTANT!!! remember CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<section class=" mt-5">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3 pl-lg-5">
                <div class="widget">
                    <span class="widget-title">Categorías</span>
                    <div class="list-group list-group-categories">
                        @foreach($subcategorias->subcategorias as $subgategoria)
                        <a href="" class="small list-group-item d-flex justify-content-between align-items-center">
                            {{ $subgategoria->nombre }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

@include('layout.partials.nav')

@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
@yield('map-script')
</body>
</html>
