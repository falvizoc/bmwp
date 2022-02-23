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
            <li class="nav-item">
                <a href="{{ url('https://store.bitmovil.mx') }}" target="_blank" class="badge badge-pill badge-red " ><small class="text-white"> <i class="icon-shopping-cart"></i> Tienda en línea</small></a>
            </li>
            <li class="nav-item dropdown-mega show">
                <a href="" class="nav-link text-white dropdown-toggle" id="softwareMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-white">Soluciones</span>
                </a>
                <div class="dropdown-menu container" aria-labelledby="navbarDropdown-1" style="top:45px;">
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
                        <!--
                        <div class="col">
                            <ul class="mega-list">
                                 Fuego
                                <li><span><ion-icon name="flame-outline"></ion-icon> Detección de Fuego </span></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="text-dark" href="{{ url('/deteciondefuego') }}">Honeywell<p>Páneles | Sistemas de alarma</p></a></li>
                                <li><a class="text-dark" href="{{ url('/') }}">Plantas automatizadas <p>Tableros de transferencia</p></a></li
                            </ul>
                        </div>
                        -->
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown show">
                <a href="" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="text-white">Software</span>
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
            </li>
            <li class="nav-item dropdown show">
                <a href="" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="text-white">Infraestructura</span>
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
                    <span class="text-white">Servicios</span>
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
            <li class="nav-item"><a href="{{ url('/foros') }}" class="nav-link text-white"><span class="text-white">Foros</span></a></li>
            <li class="nav-item"><a href="{{ url('/contacto') }}" class="nav-link text-white"><span class="text-white">Contacto</span></a></li>
        </ul>
        <!--
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle text-white" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon-user text-white"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Ingresar</a>

                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>

                </div>

            </li>
        </ul>
        -->
        <ul class="navbar-nav mr-1">
            <li class="nav-item dropdown ">
                <a href="" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <button class="btn btn-ico btn-sm btn-rounded btn-orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <small class="text-white lead"> <i class="icon-phone"></i> </small>
                    </button>
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a href="{{ url('tel:+528332272527') }}" class="dropdown-item">
                        <span><i class="icon-phone"></i> 83 3227 2527</span>
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
<!-- /Navbar
