<!--  Navbar  -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-blue-bm">
    <a class="align-self-center" href="{{ url('/') }}" style="margin: 0 50px 0 15px">
            <img src="{{asset('assets/img/Bitmovil-LOGO-03.png')}}" alt="Logo" style="height: 2.5rem" >
        </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="pr-6 mb-2 text-white navbar-toggler-icon"></i>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto left">
            <!-- Tienda en línea
            <li class="nav-item">
                <a href="{{ url('https://store.bitmovil.mx') }}" target="_blank" class="badge badge-pill badge-red " ><small class="text-white"> <i class="icon-shopping-cart"></i> Tienda en línea</small></a>
            </li>
-->
            <!-- Nosotros -->
            <li class="nav-item dropdown-mega show">
                <a href="" class="nav-link text-white" id="softwareMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-white">Nosotros</span>
                </a>
            </li>
            <!-- Portafolio -->
            <li class="nav-item dropdown-mega show">
                <a href="" class="nav-link text-white dropdown-toggle" id="softwareMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-white">Portafolio</span>
                </a>
                <div class="dropdown-menu container" aria-labelledby="navbarDropdown-1" style="top:45px;">
                    <div class="row">
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Cableado Estructurado -->
                                <li><span><ion-icon name="git-network-outline"></ion-icon> Infraestructura Física de Redes</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/controldeacceso') }}">Control de acceso <p>Torniquetes | Chapas | Biométricos</p></a></li>
                                <li><a class="text-dark" href="{{ url('/videovigilancia') }}">Videovigilancia <p>Cámaras | Video Wall | VMS </p></a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Cableado Estructurado -->
                                <li><span><ion-icon name="lock-closed-outline"></ion-icon> Soluciones de Seguridad Patrimonial</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/controldeacceso') }}">Control de acceso <p>Torniquetes | Chapas | Biométricos</p></a></li>
                                <li><a class="text-dark" href="{{ url('/videovigilancia') }}">Videovigilancia <p>Cámaras | Video Wall | VMS </p></a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Cableado Estructurado -->
                                <li><span><ion-icon name="lock-closed-outline"></ion-icon>Soluciones Avanzadas</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/controldeacceso') }}">Control de acceso <p>Torniquetes | Chapas | Biométricos</p></a></li>
                                <li><a class="text-dark" href="{{ url('/videovigilancia') }}">Videovigilancia <p>Cámaras | Video Wall | VMS </p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Cableado Estructurado -->
                                <li><span><ion-icon name="lock-closed-outline"></ion-icon>Soluciones de energía</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/controldeacceso') }}">Control de acceso <p>Torniquetes | Chapas | Biométricos</p></a></li>
                                <li><a class="text-dark" href="{{ url('/videovigilancia') }}">Videovigilancia <p>Cámaras | Video Wall | VMS </p></a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Cableado Estructurado -->
                                <li><span><ion-icon name="lock-closed-outline"></ion-icon>Suministros</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/controldeacceso') }}">Control de acceso <p>Torniquetes | Chapas | Biométricos</p></a></li>
                                <li><a class="text-dark" href="{{ url('/videovigilancia') }}">Videovigilancia <p>Cámaras | Video Wall | VMS </p></a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Cableado Estructurado -->
                                <li><span><ion-icon name="lock-closed-outline"></ion-icon>Servicio Técnico</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/controldeacceso') }}">Control de acceso <p>Torniquetes | Chapas | Biométricos</p></a></li>
                                <li><a class="text-dark" href="{{ url('/videovigilancia') }}">Videovigilancia <p>Cámaras | Video Wall | VMS </p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Partners y certificaciones -->
            <li class="nav-item dropdown show">
                <a href="" class="nav-link text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="text-white">Certificaciones</span>
                </a>
            </li>

            <!-- Casos de éxito -->
            <li class="nav-item dropdown show">
                <a href="" class="nav-link text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="text-white">Casos de éxito</span>
                </a>
            </li>

            <!-- Blog y recursos-->
            <li class="nav-item dropdown show">
                <a href="" class="nav-link text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="text-white">Blog y Recursos</span>
                </a>
            </li>

            <!-- Contacto -->
            <li class="nav-item"><a href="{{ url('https://wa.link/bitmovil') }}" target="_blank"  class="nav-link text-white"><span class="text-white">Contacto</span></a></li>
        </ul>
        <ul class="navbar-nav mr-1">
            <li class="nav-item">
                <a href="{{ url('/hp') }}" class="nav-link text-white"
                   data-toggle="tooltip"
                   data-html="true"
                   data-placement="bottom"
                   title="Conoce nuestra propuesta HP">
                    <img src="{{asset('assets/img/partners/HP_White.png')}}" alt="hp" style="height: 2.1rem" >
                </a>
            </li>
            <li class="nav-item"><a href="{{ url('/hp') }}" class="nav-link"><span class="text-white"> </span></a></li>
        </ul>
        <ul class="navbar-nav mr-1">
            <li class="nav-item">
                <div class=" ">
                    <a href="{{ url('tel:+528332272527') }}" class="btn btn-ico btn-sm btn-rounded btn-orange"
                       data-toggle="tooltip"
                       data-html="true"
                       data-placement="bottom"
                       title="<em>83 3227 2527</em>">
                            <span class="text-white lead"><i class="icon-phone"></i></span>
                    </a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-1">
            <li class="nav-item">
                <div class=" ">
                    <a href="{{'https://wa.link/bitmovil'}}" target="_blank" class="btn btn-ico btn-sm btn-rounded btn-teal"><span class="text-white lead"><i class="icon-whatsapp"></i></span> </a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-1">
            <li class="nav-item">
                <div class=" ">
                    <a href="{{'https://facebook.com/bitmovilmx'}}" target="_blank" class="btn btn-ico btn-sm btn-rounded btn-dark-blue"><span class="text-white lead"><i class="icon-facebook"></i></span> </a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-1">
            <li class="nav-item">
                <div class=" ">
                    <a href="{{ url('https://linkedin.com/company/bitmovil') }}" target="_blank" class="btn btn-ico btn-sm btn-rounded btn-outline-transparent-white"><span class="text-white lead"><i class="icon-linkedin"></i></span></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- /Navbar-->
