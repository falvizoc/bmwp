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
    <header>
            @include('layout.partials.nav')
    </header>
    <main>
        <!-- Sección Hero -->
        <section class="p-0 ">
            <div class="swiper-container text-white">
                 <!--data-top-top="transform: translateY(0px);"
                 data-top-bottom="transform: translateY(250px);"-->
                <div class="swiper-wrapper">
                    <div class="swiper-slide vh-100">
                        <div class="image image-zoom image-overlay" style="background-image: url('{{ asset('assets/img/hero/computoEmpresarial.png') }}')"></div>
                        <div class="caption aos-init aos-animate">
                            <div class="container">
                                <div class="row align-items-center vh-100">
                                    <div class="col-lg-10" data-swiper-parallax-y="-100%">
                                        <h1 class="display-2 text-white">Soluciones Tecnológicas Empresariales</h1>
                                        <h2 class="display-2 text-white">
                                            <span class="font-weight-bold text-white" id="typed"></span>
                                        </h2>
                                        <div id="typed-strings" style="display: none;">
                                            <p>HP</p>
                                            <p>Lenovo</p>
                                            <p>Dell</p>
                                        </div>
                                    </div>
                                    <a href="" class="btn btn-rounded btn-red px-5">Más Información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-footer mb-5">
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
        <section class="p-0 position-sticky">
            <div class="container">
               <h1 class="display-1">Beneficios</h1>
            </div>

        </section>
        <!-- /Sección Beneficios -->

        <!-- Sección Nuestras Marcas -->
        <section class="bg-light">
            <div class="container">
                <h1 class="display-1">Marcas</h1>
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

        <!-- Footer -->
        @include('layout.partials.footer')
        @include('layout.partials.footer-scripts')
        <!-- Footer -->
    </main>
</body>
</html>


