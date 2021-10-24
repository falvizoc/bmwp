<!-- Carousel  -->
<div id="carouselControlsIndicators" class="carousel slide pt-5 " data-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-target="#carouselControlsIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselControlsIndicators" data-slide-to="1"></li>
        <li data-target="#carouselControlsIndicators" data-slide-to="2"></li>
        <li data-target="#carouselControlsIndicators" data-slide-to="3"></li>
        <li data-target="#carouselControlsIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">

        <!-----     Microsoft   -->
        <div class="carousel-item ">
            <img class="d-block w-100 img-adjust img-adjust-h500" src="{{asset('assets/img/carousel-ms.jpg')}}" alt="First slide">
            <div class="container">
                <div class="row align-items-start">
                    <div class="carousel-caption " style="background-color: rgba(0,0,0,0.5); border-radius: 15px; ">
                        <img src="{{asset('assets/img/microsoft.png')}}" alt="" class="Microsoft" style="height: 100px; width: auto;">
                        <h1 class="">Licencias por volumen para <br>
                        <span id="typed" class="text-green"></span></h1>
                        <div id="typed-strings">
                            <p>empresas</p>
                            <p>gobierno</p>
                            <p>escuelas</p>
                        </div>
                        <br>
                        <a href="{{ url('/microsoft') }}" class="btn btn-green btn-sm">Más información</a>
                    </div>
                </div>
            </div>
        </div>
        <!-----     Fortinet    -->
        <div class="carousel-item active ">
            <img class="d-block w-100 img-adjust img-adjust-h500" src="{{asset('assets/img/carousel-fortinet.png')}}" alt="First slide">
            <div class="container">
                <div class="row align-items-start">
                    <div class="carousel-caption " style="background-color: rgba(180,180,180,0.5); border-radius: 15px; ">
                        <h2 class="text-dark"> Transformación Digital con enfoque en Seguridad de la Información </h2>
                        <img src="{{asset('assets/img/logo-fortinet-partner.png')}}" alt="" class="Microsoft" style="height: 100px; width: auto;">
                        <br><br>
                        <a href="{{ url('/microsoft') }}" class="btn btn-red btn-sm">Más información</a>
                    </div>
                </div>
            </div>
        </div>
        <!-----     Autodek     -->
        <div class="carousel-item">
            <img class="d-block w-100 img-adjust img-adjust-h500" src="{{asset('assets/img/carousel-ac.jpg')}}" alt="Second slide">
            <div class="container">
                <div class="row align-items-start ">
                    <div class="carousel-caption" style="background-color: rgba(255,255,255,0.4); border-radius: 15px; ">
                        <br>
                        <h2 class="text-dark">Diseño 3D para Ingeniería y Construcción </h2>
                        <br>
                        <img src="{{asset('assets/img/autodesk.png')}}" alt="Autodesk" class="" style="height: 80px; width: auto;">
                        <br><br>
                        <a href="{{ url('/microsoft') }}" class="btn btn-skype btn-sm">Más información</a>
                    </div>
                </div>
            </div>
        </div>
        <!-----   Cisco    -->
        <div class="carousel-item">
            <img class="d-block w-100 img-adjust img-adjust-h500" src="{{asset('assets/img/carousel-cisco.jpeg')}}" alt="Fourth slide">
            <div class=" container-fluid">
                <div class="row align-items-start">
                    <div class="carousel-caption " style="background-color: rgba(10,10,10,0.5); border-radius: 15px; ">
                        <img src="{{asset('assets/img/logo-cisco-bco.png')}}" alt="Cisco" style="height: 100px; width: auto;">
                        <h1 class="text-white"> La solución completa en <br> <span id="typed2" class="text-twitter display-3"></span></h1>
                        <div id="typed2-strings">
                            <p class="display-3"> Cloud</p>
                            <p class="display-3"> Redes</p>
                            <p class="display-3"> Cyberseguridad</p>
                        </div>
                        <br>
                        <a href="{{ url('/cisco') }}" class="btn btn-skype btn-sm">Más información</a>
                    </div>
                </div>
            </div>
        </div>
        <!-----     Antivirus   -->
        <!-- <div class="carousel-item">
            <img class="d-block w-100 img-adjust img-adjust-h500" src="{{asset('assets/img/carousel-av.jpg')}}" alt="Second slide">
            <div class=" container-fluid">
                <div class="carousel-caption " style="background-color: rgba(255,255,255,0.5); border-radius: 15px; ">
                    <div class="row">
                        <div class="col-sm-5 col-md-3">
                            <div class="container">
                                <a href=""><img class="pl-3" src="{{asset('assets/img/symantec.png')}}" alt="Symantec" style="width: 12em; padding-bottom:1em;" ></a>
                                <a href=""><img class="pl-3" src="{{asset('assets/img/kaspersky.png')}}" alt="Kaspersky" style="width: 12em;  padding-bottom:2em;"></a>
                                <a href=""><img class="pl-3" src="{{asset('assets/img/mcafee.png')}}" alt="McAfee" style="height: 2em; width: auto;" ></a>
                            </div>

                        </div>
                        <div class="col-sm-7 col-md-9">
                            <h4 class="display-4 text-dark">La mejor protección contra </h4>
                            <h4 class="display-4 text-dark" ><span id="typed2" class="text-blue"></span></h4>
                            <div id="typed2-strings">
                                <p>virus.</p>
                                <p>ataques.</p>
                                <p>malware.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ url('/microsoft') }}" class="btn btn-google-plus btn-sm">Más información</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-----  CCTV   -->
        <div class="carousel-item ">
            <img class="d-block w-100 img-adjust img-adjust-h500" src="{{asset('assets/img/carousel-cctv.png')}}" alt="cctv">
            <div class="container">
                <div class="row align-items-start">
                    <div class="carousel-caption " style="background-color: rgba(200,200,200,0.5); border-radius: 15px; ">
                        <!-- <img src="{{asset('assets/img/microsoft.png')}}" alt="" class="Microsoft" style="height: 100px; width: auto;"> -->

                            <h1 class="text-dark"> Video vigilancia para<br>Hogar o Empresa</h1>

                        <a href="{{ url('/microsoft') }}" class="btn btn-yellow btn-sm">Más información</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselControlsIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselControlsIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
