<!DOCTYPE html>
<html lang="es">
<head>
    <title>Equipos de cómputo empresariales y Servidores de las mejores Marcas| Bitmovil</title>
    <meta name="description" content="Descubre los mejores equipos de cómputo empresariales y servidores HP, Lenovo, Dell. Soluciones tecnológicas avanzadas para empresas.">
    <meta property="og:title" content="Equipos de Cómputo Empresariales y Servidores HP/Lenovo/Dell" />
    <meta property="og:description" content="Explora nuestra gama de equipos de cómputo empresariales y servidores de marcas líderes como HP, Lenovo, Dell. Ideal para negocios que buscan eficiencia y rendimiento." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image" content="{{asset('path/to/your/image.jpg')}}" />
    <link rel="canonical" href="{{url()->current()}}">
    @include('layout.partials.head')
</head>
<body data-aos="ease" data-aos-duration="800" data-aos-delay="0">
<main>
    <header class="header-sticky">
            @include('layout.partials.nav')
    </header>

        <!-- Sección Hero -->
        <section class="p-0 ">
            <div class="swiper-container text-white"
                 data-top-top="transform: translateY(0px);"
                 data-top-bottom="transform: translateY(0px);"
                 style="transform: translateY(0px);">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vh-10">
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
                                            <a href="" class="btn btn-rounded btn-red">Solicita una cotización.</a>
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
                                    <div class="mouse" style="border-color: lightsteelblue; background: lightsteelblue"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Sección Hero -->

        <!-- Sección Beneficios -->
        <section class="bg-light p-4" >
            <div class="container">
                <div class="row justify-content-center text-center text-lg-left">
                    <div class="col-12 col-lg-8 ">
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="">Equipos y Servidores que Impactan en la Productividad de tu Empresa.</h2>
                                <p class="lead text-gray-dark">El más alto Desempeño para superar cualquier Desafío Empresarial.</p>
                            </div>
                        </div>
                        <div class="row gutter-0">
                            <div class="col-sm-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <div class="bordered rising p-3">
                                    <i class="icon-cpu text-green fs-40 mb-3"></i>
                                    <h4 class="mb-0">Rendimiento superior</h4>
                                    <p>Procesadores para las tareas más exigentes.</p>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                                <div class="bordered rising p-3">
                                    <i class="icon-lock text-green fs-40 mb-3"></i>
                                    <h4 class="mb-0">Confiabilidad <br>sólida</h4>
                                    <p>Menos interrupciones, mayor productividad</p>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="300">
                                <div class="bordered rising p-3">
                                    <ion-icon  class="text-green fs-38 mb-3" name="build-outline"></ion-icon>
                                    <h4 class="mb-0">Soporte <br>Premium</h4>
                                    <p>Asistencia técnica prioritaria y efectiva.</p>
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
    <section class="component">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h4>Partners</h4>
                </div>
            </div>
        </div>
        <div class="tab-content" id="component-1">

            <div class="tab-pane show active" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
                <div class="component-example">
                    <div class="container">
                        <div class="row">
                            <div class="col partners align-items-center">
                                <div class="owl-carousel" data-items="[6,4,2]" data-loop="true" data-autoplay="true">
                                    <div class="HP">
                                        <img src="{{ asset('assets/img/partners/logo-1.png') }}" alt="Logo">
                                    </div>
                                    <div class="Lenovo">
                                        <img src="{{ asset('assets/img/partners/logo-3.png') }}" alt="Logo">
                                    </div>
                                    <div class="Dell">
                                        <img src="{{ asset('assets/img/partners/logo-5.png') }}" alt="Logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
        <!-- /Sección Nuestras Marcas-->

        <!-- Sección ¿Por qué elegir Bitmovil? -->
        <!-- /Sección ¿Por qué elegir Bitmovil?-->

        <!-- Sección Casos de éxito -->
        <!-- /Sección Casos de éxito-->

        <!-- Sección CTA Secundario -->
        <!-- /Sección CTA Secundario-->

        <!-- Sección FAQs -->
        <!-- /Sección FAQs -->


    </main>
    <!-- Footer -->
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
    <!-- Footer -->
</body>
</html>


