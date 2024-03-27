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
                    <div class="row" style="margin-bottom:0px;">
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Cableado Estructurado y FO-->
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle text-black" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="text-black lead"><ion-icon name="git-network-outline"></ion-icon>Infaestructura Física de Redes</span>
                                    </a>
                                    <div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown" style="top:45px;">
                                        <a href="{{ url('/cableadoFibra') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="analytics-outline"></ion-icon>Cableado Estructurado y Fibra Óptica<p>Conexiones sólidas, velocidad superior.</p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/seguridadInformatica') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="layers-outline"></ion-icon>Seguridad Informática<p>Protección avanzada, datos seguros.</p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/redesInalambricas') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="wifi-outline"></ion-icon>Redes Inalámbricas<p>Conectividad confiable y con amplio alcance.</p>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Seguridad Patrimonial -->
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle text-black" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="text-black lead"><ion-icon name="lock-closed-outline"></ion-icon> Soluciones de Seguridad</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="top:45px;">
                                        <a href="{{ url('/videoVigilancia') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="videocam-outline"></ion-icon> Video Vigilancia<p>Videovigilancia continua, máxima seguridad</p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/controlAcceso') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="finger-print-outline"></ion-icon> Sistemas Control de Acceso<p>Accesos Controlados, entornos protegidos </p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/automatizacion') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="git-compare-outline"></ion-icon> Sistemas de Automatización <p>Portones | Barreras Vehiculares | Puertas </p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/controlIncendio') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="flame-outline"></ion-icon> Sistemas de Control de Incendio <p>Detección y respuestas rápidas a incendios </p>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Soluciones Avanzadas -->
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle text-black" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="text-black lead"><ion-icon name="medal-outline"></ion-icon> Soluciones Avanzadas</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="top:45px;">
                                        <a href="{{ url('/VoIP') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="call-outline"></ion-icon> VoIP (Voz sobre IP)<p>Comunicación clara, costos reducidos.</p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/controlAsistencia') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="people-outline"></ion-icon> Control de Asistencia<p>Gestión eficaz del tiempo laboral.</p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/salasVideoConferencia') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="mic-outline"></ion-icon> Salas de Videoconferencia<p>Reuniones remotas, colaboración sin límites.</p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/almacenamientoDatos') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="cube-outline"></ion-icon> Almacenamiento y Protección de Datos.<p>Datos seguros, acceso rápido.</p>
                                            </span>
                                        </a>
                                    </div>
                            </ul>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Energía -->
                                <li class="nav-item dropdown mt-0">
                                    <a href="" class="nav-link dropdown-toggle text-black" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="text-black lead"><ion-icon name="flash-outline"></ion-icon> Soluciones de Energía</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="top:45px;">
                                        <a href="{{ url('/videoVigilancia') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="battery-charging-outline"></ion-icon> Respaldo de Suministro Eléctrico<p>Continuidad Operativa Garantizada</p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/controlAcceso') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="flash-off-outline"></ion-icon> Protección contra Descargas Eléctricas<p>Equipos protegidos, operación segura </p>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Suministros -->
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle text-black" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="text-black lead"><ion-icon name="sync-outline"></ion-icon> Suministros</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="top:45px;">
                                        <a href="{{ url('/videoVigilancia') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="desktop-outline"></ion-icon> Equipo de Cómputo y Servidores<p>Hardware de vanguardia, desempeño óptimo.</p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/controlAcceso') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="shield-checkmark-outline"></ion-icon> Licenciamiento de Software<p>Software legal, funcionalidades completas.</p>
                                            </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/automatizacion') }}" class="dropdown-item">
                                            <span>
                                                <ion-icon name="headset-outline"></ion-icon> Accesorios, Refacciones y Consumibles<p>Complementos esenciales, mantenimiento eficiente.</p>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="mega-list">
                                <!-- Servicio Técnico -->
                                <li class="nav-item dropdown">
                                    <a href="{{ url('/servicioTecnico') }}" class="dropdown-item">
                                        <p class="lead text-black"><ion-icon name="build-outline"></ion-icon> Servicio Técnico</p>

                                    </a>
                                </li>
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
