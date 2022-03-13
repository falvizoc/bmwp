@extends('layout.layout')
@section('title', 'Planes Microsoft 365 para Empresas') <!--Personaliza el título del conenido de la página-->
@section('content')
    <section class="bg-light mt-6">
        <div class="container-fluid separator-bottom">
            <div class="row  ">
                <div class="col-md-10 ">
                    <!-- cover -->
                    <section class="p-0">
                        <div class="swiper-container text-white swiper-container-fade swiper-container-horizontal skrollable skrollable-between" data-top-top="transform: translateY(0px);" data-top-bottom="transform: translateY(250px);" style="transform: translateY(0px);">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide vh-100 swiper-slide-active" style="width: 1348px; transform: translate3d(0px, 0px, 0px);">
                                    <div class="image image-zoom" style="background-image:url(../assets/img/M365.jpg)"></div>
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
                                                        <p>en la Vida</p>
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
                                                <div class="mouse"></div>
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
                                <div class="col-12 col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <h2 class="display-3">Encuentra el mejor plan.<br></h2>
                                        </div>
                                    </div>
                                    <div class="row gutter-0">
                                        <div class="col-sm-5 col-lg-3 aos-init aos-animate" data-aos="fade-up">
                                            <div class="bordered rising p-3 bg-white">
                                                <i class="icon-home text-primary text-red fs-50 mb-2"></i>
                                                <p>Personal y Familiar</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                                            <div class="bordered rising p-3 bg-white">
                                                <i class="icon-briefcase text-primary text-green fs-50 mb-2"></i>
                                                <p>Negocios <br><br></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                            <div class="bordered rising p-3 bg-white">
                                                <i class="icon-building text-primary text-yellow fs-50 mb-2"></i>
                                                <p>Empresas <br><br></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                                            <div class="bordered rising p-3 bg-white">
                                                <i class="icon-book text-primary text-blue fs-50 mb-2"></i>
                                                <p>Educación <br><br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-3 presentation presentation-responsive aos-init aos-animate" data-aos="zoom-in-left">
                                    <img class="top-0" src="{{asset('assets/img/chica.png')}}" alt="Decoration">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- / presentación -->
                </div>
            </div>
        </div>
    </section>


@endsection

