<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') - Bitmovil</title>

    <!-- css -->

    <link rel="stylesheet" href="{{asset('assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>
<!-- Image and text -->
<!--  BARRA DE NAVEGACIÓN  -->

<nav class=" navbar navbar-expand-lg navbar-dark fixed-top bg-blue-bm">
    <a class="navbar-brand text-white pl-3 pb-7 align-self-center" href="#">
    <!-- <h2 class="font-weight-bold"><img src="{{asset('img/isotipo-stroke-2.png')}}" alt="" class="img-fluid bm-isotype " style="height: 1.3em; float: left; padding-bottom: 7px; padding-right: 2px;">Bitmovil</h2>-->
        <img href="{{ url('/') }}" src="{{asset('assets/img/Bitmovil-LOGO-03.png')}}" alt="Logo" style="height: 4.3em; float: left; padding-bottom: 7px; padding-right: 2px;">
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="pr-6 mb-2 text-white navbar-toggler-icon"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto right">
                <li class="nav-item">
                    <a href="{{ url('/nuevanormalidad') }}" class="nav-link btn btn-google-plus " style="
                    position: relative;
                    top: 10px;
                    padding-top: 1px;
                    width: 120px;
                    height: 19px;
                    font-size: 11px;
                    color: white;" >Nueva Normalidad</a>
                </li>
                <li class="nav-item  dropdown-mega show">
                    <a href="" class="nav-link text-white dropdown-toggle" id="softwareMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Soluciones
                    </a>
                    <div class="dropdown-menu container" aria-labelledby="navbarDropdown-1">
                        <div class="row">
                            <div class="col">
                                <ul class="mega-list">
                                    <!-- Seguridad -->
                                    <li><span><ion-icon name="lock-closed-outline"></ion-icon> Seguridad</span></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="text-dark" href="{{ url('/controldeacceso') }}">Control de acceso <p>Comentarios</p></a></li>
                                    <li><a class="text-dark" href="{{ url('/videovigilancia') }}">Videovigilancia <p>Comentarios</p></a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="mega-list">
                                    <!-- Redes -->
                                    <li><span><ion-icon name="git-network-outline"></ion-icon> Redes</span></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="text-dark" href="{{ url('/redesinalambricas') }}">Redes inalámbricas<p>Comentarios</p></a></li>
                                    <li><a class="text-dark" href="{{ url('/networking') }}">Networking<p>Comentarios</p></a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="mega-list">
                                    <!-- Cableado -->
                                    <li><span><ion-icon name="analytics-outline"></ion-icon> Cableado</span></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="text-dark" href="{{ url('/cableadoestructurado') }}">Cableado Estructurado<p>Comentarios</p></a></li>
                                    <li><a class="text-dark" href="{{ url('/fibra') }}">Fibra óptica <p>Comentarios</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown show">
                    <a href="" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Software
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <a href="{{ url('/microsoft') }}" class="dropdown-item">
                            <span><ion-icon name="logo-windows"></ion-icon> Microsoft</span>
                            <p>Licenciamiento para Empresas y Hogares</p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ url('/antivirus') }}" class="dropdown-item">
                            <span><ion-icon name="bug"></ion-icon> Antivirus</span>
                            <p>Mensaje</p>
                        </a>
                    </div>

                </li> <li class="nav-item dropdown show">
                    <a href="" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Infraestructura
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <a href="{{ url('/computo') }}" class="dropdown-item">
                            <span><ion-icon name="hardware-chip-outline"></ion-icon>  Servidores y cómputo</span>
                            <p>Servidores</p>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="{{ url('/almacenamiento') }}" class="dropdown-item">
                            <span><ion-icon name="server-outline"></ion-icon> Almacenamiento</span>
                            <p>Almacenamiento</p>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown show">
                        <a href="" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Servicios
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a href="{{ url('/polizas') }}" class="dropdown-item">
                                <span><ion-icon name="build-outline"></ion-icon>  Pólizas de soporte</span>
                                <p>Comentario</p>
                            </a>

                            <div class="dropdown-divider"></div>
                            <a href="{{ url('/financieros') }}" class="dropdown-item">
                                <span><ion-icon name="cash-outline"></ion-icon> Servicios Financieros</span>
                                <p>comentario</p>
                            </a>
                        </div>
                </li>
                <li class="nav-item"><a href="{{ url('/foros') }}" class="nav-link text-white">Foros</a></li>
                <li class="nav-item"><a href="{{ url('/contacto') }}" class="nav-link text-white">Contacto</a></li>
            </ul>
            <div class="col-md-3 text-lg-right">
                <a href="tel:+528332272527" class="btn btn-sm btn-skype btn-rounded px-5"><ion-icon name="call-outline"></ion-icon>  83 3227 2527</a>
            </div>






    </div>

</nav>








@yield('content')

<!--  Footer -->



<div class="tab-pane show" id="component-4-2" role="tabpanel" aria-labelledby="component-4-2">

<div class="component-example component-example-fit">
    <footer class="bg-blue-bm text-white">
        <div class="separator-bottom py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <p class="h2">
                            Ayudamos a nuestros clientes a obtener el mayor valor de sus recursos de TI.
                        </p>
                        <p class="lead">
                            Ingeniería   |   Enfoque estratégico   |   Honestidad
                        </p>

                    </div>
                    <div class="col-md-6 text-md-right">
                        <ul class="socials">
                            <li><a href="" class="icon-facebook fs-20"></a></li>
                            <li><a href="" class="icon-instagram fs-20"></a></li>
                            <li><a href="" class="icon-twitter fs-20"></a></li>
                            <li><a href="" class="icon-linkedin fs-20"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-1">
                        <img href="#" src="{{asset('assets/img/Bitmovil-LOGO-03.png')}}" alt="" style="height: 4.3em; float: left; padding-bottom: 7px; padding-right: 2px;">
                    </div>
                    <span class="copyright-text">©Derechos Reservados 2020</span>
                </div>


                <div class="col col-lg-2">
                    <ul class="list-group bg-blue-bm list-group-minimal">
                        <li class="list-group-item"><a href="">CCTV Manager</a></li>
                        <li class="list-group-item"><a href="">Catálogos</a></li>
                        <li class="list-group-item"><a href="">Oportunidades de mejora</a></li>
                        <li class="list-group-item"><a href="">Eventos</a></li>
                        <li class="list-group-item"><a href=""></a></li>
                    </ul>
                </div>
                <div class="col col-lg-2">
                    <ul class="list-group list-group-minimal">
                        <li class="list-group-item"><a href="">Contacto</a></li>
                        <li class="list-group-item"><a href="">Nosotros</a></li>
                        <li class="list-group-item"><a href="">Aviso de privacidad</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a href="tel:+52 83 3227 2527" class="phone bordered">+52 83 3227 2527</a>
                </div>
            </div>
        </div>
    </footer>
</div>



<!-- scripts -->
<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

<script>
    $(function(){
        $('.carousel').carousel({
            interval: 9000
        })
    });
</script>

</body>
</html>
