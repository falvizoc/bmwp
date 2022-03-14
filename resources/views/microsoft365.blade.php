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
                                <div class="col-12 col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h2 class="display-3">Elije el mejor plan para ti.<br></h2>
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
                            <div class="decorated-bottom text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40" preserveAspectRatio="none">

                                </svg>
                            </div>
                        </div>
                    </section>
                    <!-- / presentación -->
                    <section>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 text-center">
                                    <h1 class="display-4 pb-0">Somos orgullosamente</h1>
                                    <img  src="{{asset('assets/img/MSPartner.png')}}" alt="Microsoft Partner" class="pt-0 top-0">
                                    <p class="">con nosotros obitenes</p>
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
                                    <p>Nuestros consultores están listos para brindarte el mejor servicio.</p>
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
                </div>
            </div>
        </div>
    </section>


@endsection

