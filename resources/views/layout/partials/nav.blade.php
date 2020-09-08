<!--  Navbar  -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-blue-bm">
    <a class="align-self-center" href="{{ url('/') }}" style="margin: 0px 50px 0px 15px">
        <img src="{{asset('assets/img/Bitmovil-LOGO-03.png')}}" alt="Logo" style="height: 2.5rem" >
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="pr-6 mb-2 text-white navbar-toggler-icon"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto left">
            <li class="nav-item">
                <a href="{{ url('/nnormalidad') }}" class="nav-link btn btn-google-plus " style="
                    position: relative;
                    top: 10px;
                    padding-top: 1px;
                    width: 120px;
                    height: 19px;
                    font-size: 11px;
                    color: white;" >Nueva Normalidad</a>
            </li>
            <li class="nav-item dropdown-mega show">
                <a href="" class="nav-link text-white dropdown-toggle" id="softwareMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Soluciones
                </a>
                <div class="dropdown-menu container" aria-labelledby="navbarDropdown-1" style="top:48px;">
                    <div class="row">
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Seguridad -->
                                <li><span><ion-icon name="lock-closed-outline"></ion-icon> Seguridad</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/controldeacceso') }}">Control de acceso <p>Torniquetes | Chapas | Biométricos</p></a></li>
                                <li><a class="text-dark" href="{{ url('/videovigilancia') }}">Videovigilancia <p>Cámaras | Video Wall | VMS </p></a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Redes -->
                                <li><span><ion-icon name="git-network-outline"></ion-icon> Redes</span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/redesinalambricas') }}">Redes inalámbricas<p> Redes unificadas | Enlaces</p></a></li>
                                <li><a class="text-dark" href="{{ url('/') }}">Networking<p>Switches | Routers | Firewalls</p></a></li>
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
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Fuego -->
                                <li><span><ion-icon name="flame-outline"></ion-icon> Detección de Fuego </span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/deteciondefuego') }}">Honeywell<p>Páneles | Sistemas de alarma</p></a></li>
                            <!-- li><a class="text-dark" href="{{ url('/') }}">Plantas automatizadas <p>Tableros de transferencia</p></a></li -->
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
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/cableadoestructurado') }}" class="dropdown-item">
                        <span><ion-icon name="analytics-outline"></ion-icon> Cableado Estructurado</span>
                        <p>Synology</p>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/') }}" class="dropdown-item">
                        <span><ion-icon name="locate-outline"></ion-icon> Fibra óptica</span>
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
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/') }}" class="dropdown-item">
                        <span><ion-icon name="code-slash-outline"></ion-icon> Desarrollo Web</span>
                        <p>Sitios y Aplicaciones Web</p>
                    </a>

                </div>
            </li>
            <li class="nav-item"><a href="{{ url('/foros') }}" class="nav-link text-white">Foros</a></li>
            <li class="nav-item"><a href="{{ url('/contacto') }}" class="nav-link text-white">Contacto</a></li>
        </ul>
        <ul class="navbar-nav mr-1">
            <li class="nav-item">
                <div class=" ">
                    <a href="tel:+528332272527" class="badge badge-pill badge-success"><small class="text-white"><ion-icon name="call-outline"></ion-icon>  83 3227 2527</small></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- /Navbar
