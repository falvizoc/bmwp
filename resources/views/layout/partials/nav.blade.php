<!--  BARRA DE NAVEGACIÓN  -->
<nav class=" navbar navbar-expand-lg navbar-dark fixed-top bg-blue-bm">
    <a class="navbar-brand text-white pl-3 pb-7 align-self-center" href="{{ url('/') }}">
    <!-- <h2 class="font-weight-bold"><img src="{{asset('img/isotipo-stroke-2.png')}}" alt="" class="img-fluid bm-isotype " style="height: 1.3em; float: left; padding-bottom: 7px; padding-right: 2px;">Bitmovil</h2>-->
        <img href="{{ url('/') }}" src="{{asset('assets/img/Bitmovil-LOGO-03.png')}}" alt="Logo" style="height: 4.3em; float: left; padding-bottom: 7px; padding-right: 2px;">
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="pr-6 mb-2 text-white navbar-toggler-icon"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto right">
            <li class="nav-item">
                <a href="{{ url('/gi') }}" class="nav-link btn btn-google-plus " style="
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
                                <li><a class="text-dark" href="{{ url('/') }}">Control de acceso <p>Torniquetes | Chapas | Biométricos</p></a></li>
                                <li><a class="text-dark" href="{{ url('/') }}">Videovigilancia <p>Cámaras | Video Wall | VMS </p></a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Redes -->
                                <li><span><ion-icon name="git-network-outline"></ion-icon> Redes</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/') }}">Redes inalámbricas<p> Redes unificadas | Enlaces </p></a></li>
                                <li><a class="text-dark" href="{{ url('/') }}">Networking<p>Switches | Routers | Firewalls</p></a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Cableado -->
                                <li><span><ion-icon name="analytics-outline"></ion-icon> Cableado</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/') }}">Cableado Estructurado<p>Cat 5e | Cat 6 | Cat 6A</p></a></li>
                                <li><a class="text-dark" href="{{ url('/') }}">Fibra óptica <p>Para servicios de Video, Voz y Datos</p></a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Energía -->
                                <li><span><ion-icon name="flash-outline"></ion-icon> Energía </span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/') }}">Sistemas de respaldo<p>UPS On Line | Bancos de baterías</p></a></li>
                                <li><a class="text-dark" href="{{ url('/') }}">Plantas automatizadas <p>Tableros de transferencia</p></a></li>
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
                    <a href="{{ url('/') }}" class="dropdown-item">
                        <span><ion-icon name="logo-windows"></ion-icon> Microsoft</span>
                        <p>Licenciamiento para Empresas, Escuelas y Hogares</p>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/') }}" class="dropdown-item">
                        <span><ion-icon name="bug"></ion-icon> Antivirus</span>
                        <p>Contra Virus o Malware</p>
                    </a>
                </div>

            </li> <li class="nav-item dropdown show">
                <a href="" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Infraestructura
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a href="{{ url('/') }}" class="dropdown-item">
                        <span><ion-icon name="hardware-chip-outline"></ion-icon>  Servidores y cómputo</span>
                        <p>HP | Lenovo | Dell</p>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/') }}" class="dropdown-item">
                        <span><ion-icon name="server-outline"></ion-icon> Almacenamiento</span>
                        <p>Synology</p>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown show">
                <a href="" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Servicios
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a href="{{ url('/') }}" class="dropdown-item">
                        <span><ion-icon name="build-outline"></ion-icon>  Pólizas de soporte</span>
                        <p>Aumente la disponibilidad de su infraestrucutra de TI</p>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/') }}" class="dropdown-item">
                        <span><ion-icon name="people-outline"></ion-icon> Monitoristas</span>
                        <p>Personal para Videovigilancia 24/7</p>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/') }}" class="dropdown-item">
                        <span><ion-icon name="cash-outline"></ion-icon> Servicios Financieros</span>
                        <p>Leasing para Activos de TI</p>
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
