@extends('layout.layout')
@section('title', 'Planes Microsoft 365 para Empresas') <!--Personaliza el título del conenido de la página-->
@section('content')
    <section class="bg-light">
         <!-- cover -->
                    <section class="p-0">
                        <div class="swiper-container text-white swiper-container-fade swiper-container-horizontal skrollable skrollable-between" data-top-top="transform: translateY(0px);" data-top-bottom="transform: translateY(250px);" style="transform: translateY(0px);">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide vh-100 swiper-slide-active" style="width: 1348px; transform: translate3d(0px, 0px, 0px);">
                                    <div class="image image-zoom" style="background-image:url(../assets/img/ms/M365.jpg)"></div>
                                    <div class="caption aos-init aos-animate" data-aos="fade-up">
                                        <div class="container">
                                            <div class="row align-items-center vh-100">
                                                <div class="col-lg-10" data-swiper-parallax-y="-100%" style="transform: translate3d(0px, 0%, 0px);">
                                                    <h1 class="display-1 text-black">Microsoft 365 <br></h1>
                                                    <h2 class="display-3 text-black">Saca lo mejor de ti <br>
                                                        <span class="font-weight-bold text-black" id="typed"></span>
                                                    </h2>
                                                    <div id="typed-strings" style="display: none;">
                                                        <p>en la escuela</p>
                                                        <p>en el trabajo</p>
                                                        <p>en la vida</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-footer mb-5">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <div class="mouse" style="border-color: lightsteelblue; background: lightsteelblue"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </section>
                    <!-- / cover -->
                    <!-- presentación -->
                    <section>
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="display-3 fs-50">Elije el mejor plan para ti.<br></h2>
                                        </div>
                                    </div>
                                    <div class="row gutter-1">
                                        <div class="col-md-6 col-lg-5 ">
                                            <div class="accordion-group accordion-group-feature" data-accordion-group="">
                                                <div class="accordion aos-init aos-animate" data-accordion="" data-aos="fade-up">
                                                    <div class="accordion-control" data-control="">
                                                        <i class="icon-home text-google-plus fs-50 fw-25"></i>
                                                        <h4 class="fs-16">Personal &amp; Familiar</h4>
                                                    </div>
                                                    <div class="accordion-content" data-content="" style="max-height: 180px; overflow: hidden; transition: max-height 300ms ease 0s;">
                                                        <div class="accordion-content-wrapper">
                                                            <ul class="list-group list-group-minimal">
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Aplicaciones
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    <img class="ml-0" data-toggle="tooltip" data-placement="top" title="Word" src="{{asset("assets/img/ms/wd.png")}}"  width="25" height="25" alt="">
                                                                    <img class="ml-0" data-toggle="tooltip" data-placement="top" title="Excel" src="{{asset("assets/img/ms/xl.png")}}"  width="25" height="25" alt="">
                                                                    <img class="ml-0" data-toggle="tooltip" data-placement="top" title="PowerPoint" src="{{asset("assets/img/ms/pp.png")}}"  width="25" height="25" alt="">
                                                                    <img class="ml-0" data-toggle="tooltip" data-placement="top" title="Outlook" src="{{asset("assets/img/ms/ol.png")}}"  width="25" height="25" alt="">
                                                                    <img class="ml-0" data-toggle="tooltip" data-placement="top" title="Teams" src="{{asset("assets/img/ms/tm.png")}}"  width="25" height="25" alt="">
                                                                    <img class="ml-0" data-toggle="tooltip" data-placement="top" title="OneDrive" src="{{asset("assets/img/ms/od.png")}}"  width="25" height="25" alt="">
                                                                    <img class="ml-0" data-toggle="tooltip" data-placement="top" title="Editor" src="{{asset("assets/img/ms/ed.png")}}"  width="25" height="25" alt="">
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Dispositivos
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    <i class="text-gray icon-monitor fs-30"></i>
                                                                    <i class="text-gray icon-laptop fs-30"></i>
                                                                    <i class="text-gray icon-tablet fs-30"></i>
                                                                    <i class="text-gray icon-mobile-phone fs-30"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Compatibilidad
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    <i class="text-gray icon-windows fs-30"></i>
                                                                    <i class="text-gray icon-apple fs-30"></i>
                                                                    <i class="text-gray icon-android fs-30"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Hasta 6 usuarios
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    <br>
                                                                    <a href="{{url('/')}}" class="btn btn-skype btn-sm btn-rounded align-items-center">Más información</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion aos-init aos-animate" data-accordion="" data-aos="fade-up">
                                                    <div class="accordion-control" data-control="">
                                                        <i class="icon-book text-skype fs-50 fw-25"></i>
                                                        <h4 class="fs-16">Educación</h4>
                                                    </div>
                                                    <div class="accordion-content" data-content="" style="max-height: 180px; overflow: hidden; transition: max-height 300ms ease 0s;">
                                                        <div class="accordion-content-wrapper">
                                                            <ul class="list-group list-group-minimal">
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Bidet <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Bathroom <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Toilet <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Free toiletries <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Hairdryer <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-5 ">
                                            <div class="accordion-group accordion-group-feature" data-accordion-group="">
                                                <div class="accordion aos-init aos-animate" data-accordion="" data-aos="fade-up">
                                                    <div class="accordion-control" data-control="">
                                                        <i class="icon-building text-success fs-50 fw-25"></i>
                                                        <h4 class="fs-16">Negocios &amp; Empresas</h4>
                                                    </div>
                                                    <div class="accordion-content" data-content="" style="max-height: 180px; overflow: hidden; transition: max-height 300ms ease 0s;">
                                                        <div class="accordion-content-wrapper">
                                                            <ul class="list-group list-group-minimal">
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Bidet <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Bathroom <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Toilet <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Free toiletries <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Hairdryer <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                               <!--
                                                <div class="accordion aos-init aos-animate" data-accordion="" data-aos="fade-up">
                                                    <div class="accordion-control" data-control="">
                                                        <i class="icon-bank text-warning fs-50 fw-25"></i>
                                                        <h4 class="fs-16">Gobierno</h4>
                                                    </div>
                                                    <div class="accordion-content" data-content="" style="max-height: 180px; overflow: hidden; transition: max-height 300ms ease 0s;">
                                                        <div class="accordion-content-wrapper">
                                                            <ul class="list-group list-group-minimal">
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Bidet <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Bathroom <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Toilet <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Free toiletries <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Hairdryer <i class="icon-check2 fs-20"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-3 presentation presentation-responsive aos-init aos-animate" data-aos="zoom-in-left">
                                    <img class="top-0" src="{{asset('assets/img/ms/chica.png')}}" alt="Girl">
                                </div>
                            </div>
                            <div class="decorated-bottom text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40" preserveAspectRatio="none">

                                </svg>
                            </div>
                        </div>
                    </section>
                    <!-- / presentación -->
                    <!-- / Sección Partner -->
                    <section class="bg-light">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 text-center">
                                    <img  src="{{asset('assets/img/ms/MSPartner.png')}}" alt="Microsoft Partner" class="mt-0">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4 aos-init aos-animate" data-aos="zoom-in" data-aos-anchor-placement="top-center">
                                    <div class="presentation-circle">
                                        <figure style="background-image: url('../../assets/images/demo/app/app-3.svg')"></figure>
                                    </div>
                                </div>
                                <div class="col-md-5 pl-md-10 text-center">
                                    <h2><b>La mejor asesoría en licenciamiento</b></h2>
                                    <p>Nuestros consultores están listos para brindarte el mejor servicio,
                                        ofreciendote asesoría personalizada para el diseño del mejor esquema
                                        de licencias.</p>
                                    <a href="{{url('/contacto')}}" class="link">Contáctanos</a>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-5 pr-md-10 text-center">
                                    <h2><b>Take control</b><br>of your app.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <a href="" class="link">Learn More</a>
                                </div>
                                <div class="col-md-4 aos-init" data-aos="zoom-in" data-aos-anchor-placement="top-center">
                                    <div class="presentation-circle">
                                        <figure style="background-image: url('../../assets/images/demo/app/app-4.svg')"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- / Sección Partner-->


    </section>


@endsection

