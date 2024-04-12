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
        <section class="p-0">
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
                            <div class="col-lg-9">
                                <h2 class="">Computadoras y Servidores que Impactan en la Productividad de tu Empresa.</h2>
                                <p class="lead text-gray-dark">El más alto Desempeño para superar cualquier Desafío Empresarial.</p>
                            </div>
                        </div>
                        <div class="row gutter-0">
                            <div class="col-sm-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <div class="bordered rising p-3">
                                    <i class="icon-cpu text-green fs-40 mb-3"></i>
                                    <h4 class="mb-0">Rendimiento superior</h4>
                                    <p>Procesadores Intel<sup>Ⓡ</sup> de última generación.</p>
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
                                    <p>Soporte y garantía extendida desde 3 hasta 5 años.</p>
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

        <!-- Sección Leasing -->
        <section class="p-5 bg-light ">
            <div class="container">
                <div class="boxed bg-white p-5">
                    <div class="row justify-content-between align-items-center text-center text-md-left">
                        <div class="col-md-3">
                            <h2><strong>Leasing</strong></h2>
                        </div>
                        <div class="col-md-6 ">
                            <h4 class="text-gray-dark">Disponible para proyectos de <strong>+10mil USD</strong>.</h4>
                        </div>
                        <div class="col-md-3 text-lg-right">
                            <a href="{{'https://wa.link/bitmovil'}}" class="btn btn-green btn-rounded px-5">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Sección Leasing -->

        <!-- Sección ¿Por qué elegir Bitmovil? -->
        <section class="p-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="display-4 mb-2 ">¿Por qué elegir a <strong>Bitmovil</strong>?</h1>
                        <h3 class="text-dark-blue">Impulsamos la productividad en entornos globales.</h3>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center presentation-container">
                    <div class="col-8 col-md-6 col-lg-4" data-aos="zoom-in">
                        <div class="presentation-circle">
                            <figure style="background-image: url('{{ asset('assets/img/eligiendoBitmovil/dimensionamiento.png') }}')"></figure>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 pl-md-7 text-center text-md-left">
                        <span class="eyebrow text-dark-blue mb-1">Diferencíate del resto.</span>
                        <h3 class="h2">Dimensionamiento Personalizado.</h3>
                        <p class="text-gray-dark">Ofrecemos soluciones de cómputo y servidores alineadas específicamente a las demandas y necesidades únicas de tu empresa.</p>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center presentation-container">
                    <div class="col-md-6 col-lg-5 pr-md-7 text-center text-md-right">
                        <span class="eyebrow text-dark-blue mb-1">Enfócate en tu operación.</span>
                        <h3 class="h2">Puesta a punto.</h3>
                        <p class="text-gray-dark">Disponible como un servicio adicional, preparamos y configuramos tus equipos con todo lo necesario para su uso inmediato.</p>
                    </div>
                    <div class="col-8 col-md-6 col-lg-4" data-aos="zoom-in">
                        <div class="presentation-circle with-delay">
                            <figure style="background-image: url('{{ asset('assets/img/eligiendoBitmovil/puestaPunto.png') }}')"></figure>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center presentation-container">
                    <div class="col-8 col-md-6 col-lg-4" data-aos="zoom-in">
                        <div class="presentation-circle">
                            <figure style="background-image: url('{{ asset('assets/img/eligiendoBitmovil/handshake.png') }}')"></figure>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 pl-md-7 text-center text-md-left">
                        <span class="eyebrow text-dark-blue mb-1">Asegura el éxito.</span>
                        <h3 class="h2">Experiencia y Confiabilidad.</h3>
                        <p class="text-gray-dark">Con un historial comprobado de proyectos exitosos, garantizamos soluciones tecnológicas que superan las expectativas y fortalecen tu negocio.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Sección ¿Por qué elegir Bitmovil?-->

        <!-- Sección Casos de éxito -->
        <section class="p-5 bg-light section-decorated-bottom">
            <div class="decorated-bottom text-dark-blue"></div>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 text-center text-lg-left">
                        <h2>Historias de <strong>Éxito</strong> Empresarial</h2>
                        <p class="text-dark-blue">Explora casos reales donde hemos generado mejoras en la productividad de nuestros clientes.</p>
                        <a href="{{'https://wa.link/bitmovil'}}">
                            <button type="button" class="btn btn-rounded btn-with-ico btn-behance mt-2">Envía tu reseña <i class="icon-edit-2"></i></button>
                        </a>
                    </div>
                    <div class="col-lg-7 blockquote-list">
                        <blockquote class="blockquote blockquote-2 boxed" data-aos="fade-up">
                            <p>El soporte técnico de Bitmovil respondió eficazmente cuando más lo necesitábamos, manteniendo nuestras operaciones fluidas.</p>
                            <footer class="blockquote-footer">Luis García Luna - Megatravel</footer>
                        </blockquote>
                        <blockquote class="blockquote blockquote-2 boxed" data-aos="fade-up">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <footer class="blockquote-footer">Michael Doe</footer>
                        </blockquote>
                        <blockquote class="blockquote blockquote-2 boxed" data-aos="fade-up">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <footer class="blockquote-footer">Michael Doe</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Sección Casos de éxito-->

        <!-- Sección CTA Secundario -->
        <section class="p-5 bg-white ">
            <div class="container">
            <div class="boxed bg-light p-5">
                <div class="row justify-content-between align-items-center text-center text-md-left">
                    <h3 class="col-md-3 text-center "> <i class="icon-phone-call text-blue-bm fs-60"></i></h3>
                    <div class="col-md-6">
                        <h3 class="text-gray-dark">Hablemos de tu próximo <strong>proyecto</strong>.</h3>
                    </div>
                    <div class="col-md-3 text-lg-right">
                        <a href="{{'https://wa.link/bitmovil'}}" class="btn btn-red btn-rounded px-5">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- /Sección CTA Secundario-->

        <!-- Sección FAQs -->
        <section class="bg-light p-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row separator-bottom pb-5 mb-5">
                            <div class="col-md-4">
                                <h2>Preguntas Frecuentes</h2>
                            </div>
                            <div class="col-md-8">
                                <p class="lead text-dark-blue">Encuentra respuestas rápidas a las dudas más comunes sobre nuestros productos y servicios en esta sección.</p>
                            </div>
                    </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="accordion-group accordion-group-minimal" data-accordion-group>
                                    <div class="accordion" data-accordion data-aos="fade-up">
                                        <div class="accordion-control" data-control>
                                            <h5>¿Qué tipos de servidores ofrece Bitmovil?</h5>
                                        </div>
                                        <div class="accordion-content" data-content>
                                            <div class="accordion-content-wrapper">
                                                <p>Ofrecemos servidores de diversos tipos, incluyendo servidores en torre, en rack y blade, adaptados a las necesidades específicas de tu empresa.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" data-accordion data-aos="fade-up">
                                        <div class="accordion-control" data-control>
                                            <h5>¿Puedo personalizar las configuraciones de los servidores?</h5>
                                        </div>
                                        <div class="accordion-content" data-content>
                                            <div class="accordion-content-wrapper">
                                                <p>Sí, proporcionamos opciones de personalización completa en nuestros servidores para que coincidan con los requisitos específicos de tu infraestructura.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-2 mt-md-0">
                                <div class="accordion-group accordion-group-minimal" data-accordion-group>
                                    <div class="accordion" data-accordion data-aos="fade-up">
                                        <div class="accordion-control" data-control>
                                            <h5>¿Bitmovil ofrece soluciones para pequeñas y medianas empresas?</h5>
                                        </div>
                                        <div class="accordion-content" data-content>
                                            <div class="accordion-content-wrapper">
                                                <p>Sí, nuestras soluciones de cómputo y servidores son escalables y se adaptan tanto a pequeñas como a medianas empresas.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" data-accordion data-aos="fade-up">
                                        <div class="accordion-control" data-control>
                                            <h5>¿Bitmovil ofrece opciones de leasing para servidores?</h5>
                                        </div>
                                        <div class="accordion-content" data-content>
                                            <div class="accordion-content-wrapper">
                                                <p>Sí, ofrecemos planes de leasing para proyectos de cómputo y servidores que superen los $10,000 dólares, facilitando así la adquisición de tecnología avanzada.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Sección FAQs -->


    </main>
    <!-- Footer -->
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
    <!-- Footer -->
</body>
</html>


