@extends('layout.layoutElementoPortafolio')
@section('title', 'Cableado Estructurado y Fibra Óptica') <!--Personaliza el título del contenido de la página-->
@section('metas')

@endsection

@section('content')
    <!--  Header - Menú  -->
    <header class="header-sticky">
        @include('layout.partials.nav')
    </header>
    <!--  /Header - Menú  -->

    <!-- Sección Hero -->
    <section class="p-0">
        <div class="swiper-container text-white">
            <!--data-top-top="transform: translateY(0px);"
            data-top-bottom="transform: translateY(250px);"
           style="transform: translateY(0px);">-->
            <div class="swiper-wrapper">
                <div class="swiper-slide vh-100">
                    <div class="image image-overlay image-zoom" style="background-image: url('{{ asset('assets/img/hero/computoEmpresarial.png') }}')"></div>
                    <div class="caption">
                        <div class="container">
                            <div class="row align-items-center vh-100">
                                <div class="col-lg-10" data-swiper-parallax-y="-250%">
                                    <h1 class="display-2 text-white">Soluciones Tecnológicas <br> Empresariales con</h1>
                                    <h2 class="display-1 text-white">
                                        <span class="font-weight-bold text-white" id="typed"></span>
                                    </h2>
                                    <div id="typed-strings" style="display: none;">
                                        <p>HP</p>
                                        <p>Lenovo</p>
                                        <p>Dell</p>
                                    </div>
                                    <div class="row">
                                        <span class="lead text-white">Equipos de alto desempeño para <strong> empresas de todos los tamaños.</strong></span>
                                    </div>
                                    <div class="row">
                                        <a href="{{url('https://wa.link/bitmovil')}}" class="btn btn-rounded btn-red">Solicita una cotización.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-footer ">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <div class="mouse" style="border-color: white; background: local"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Sección Hero -->

    <!-- Sección Beneficios -->
    <section class="p-4 " >
        <div class="container">
            <div class="row justify-content-center text-center text-lg-left">
                <div class="col-12 col-lg-8 ">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="">Computadoras y Servidores que Impactan en la Productividad de tu Empresa.</h2>
                            <p class="lead text-gray-dark">El más alto Desempeño para superar cualquier Desafío Empresarial.</p>
                        </div>
                    </div>
                    <div class="row gutter-0">
                        <div class="col-sm-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                            <div class="bordered rising p-3">
                                <ion-icon class="text-green fs-40 mb-3" name="hardware-chip-outline"></ion-icon>
                                <h4 class="mb-0">Rendimiento superior</h4>
                                <p>Procesadores Intel<sup>Ⓡ</sup> de última generación.</p>
                            </div>
                        </div>
                        <div class="col-sm-5 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                            <div class="bordered rising p-3">
                                <ion-icon class="text-green fs-40 mb-3" name="lock-closed"></ion-icon>
                                <h4 class="mb-0">Confiabilidad <br>sólida</h4>
                                <p>Menos interrupciones, mayor productividad</p>
                            </div>
                        </div>
                        <div class="col-sm-5 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="300">
                            <div class="bordered rising p-3">
                                <ion-icon  class="text-green fs-40 mb-3" name="build-outline"></ion-icon>
                                <h4 class="mb-0">Soporte <br>Premium</h4>
                                <p>Soporte y garantía extendidos hasta 5 años.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 presentation presentation-responsive">
                    <img class="vertical-align" src="{{ asset('assets/img/beneficios/computadoras.png') }}" alt="computadoras" style="max-width: 100%;">
                </div>
            </div>
        </div>
    </section>
    <!-- /Sección Beneficios -->

    <!-- Sección Partners -->
    <section class="p-5 bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h1 class="display-4 mb-2 "><strong class="text-blue-bm">Partners</strong></h1>
                    <h3>En alianza con los fabricantes más importantes de la industria.</h3>
                </div>
            </div>
            <div class="row justify-content-between" data-aos="zoom-in">
                <div class="col-4 d-flex justify-content-center align-items-center"><img src="{{asset('assets/img/partners/logo-1.png')}}" style="height: 100px; width: auto" alt="HP"></div>
                <div class="col-4 d-flex justify-content-center align-items-center"><img src="{{asset('assets/img/partners/logo-3.png')}}" style="width: 250px; height: auto" alt="Lenovo"></div>
                <div class="col-4 d-flex justify-content-center align-items-center"><img src="{{asset('assets/img/partners/logo-5.png')}}" style="height: 100px; width: auto" alt="Dell"></div>
            </div>
        </div>
    </section>
    <!-- /Sección Partners-->
@endsection

