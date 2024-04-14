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
            <!--  Header - Menú  -->
            <header class="header-sticky">
                @include('layout.partials.nav')
            </header>
            <!--  /Header - Menú  -->

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

            <!-- Sección Leasing -->
            <section class="p-5 bg-light ">
                <div class="container">
                    <div class="boxed bg-white p-5">
                        <div class="row justify-content-between align-items-center text-center text-md-left">
                            <div class="col-md-2">
                                <h2><strong>Leasing</strong></h2>
                            </div>
                            <div class="col-md-7">
                                <h4 class="text-gray-dark">Disponible para proyectos de <strong>+10mil USD</strong>.</h4>
                            </div>
                            <div class="col-md-3 text-lg-right">
                                <a href="{{'https://wa.link/bitmovil'}}" target="_blank" class="btn btn-green btn-rounded px-5">Más información</a>
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
                            <p class="text-gray-dark">En Bitmovil nuestro dimensionamiento personalizado es un <strong>servicio clave</strong> que asegura que las soluciones tecnológicas se adapten perfectamente a las necesidades específicas de cada cliente. Este enfoque nos permite ofrecer soluciones que no solo cumplen con los requisitos actuales de la empresa, sino que también tienen la flexibilidad para adaptarse a cambios futuros.</p>

                            <!-- Button trigger modal -->
                            <!--
                            <button type="button" class="btn btn-outline-dark-blue btn-sm " data-toggle="modal" data-target="#exampleModal">
                                Más información.
                            </button>
                            -->
                            <!-- Modal -->
                            <div class="modal " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header justify-content-end">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="icon-x"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h3>Características del Dimensionamiento Personalizado.</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias alias ipsam minima, dolore! Modi enim porro neque quaerat blanditiis. Ipsa aliquam quam maxime rerum eum accusamus nulla, molestiae soluta repellendus!</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-block">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center presentation-container">
                        <div class="col-md-6 col-lg-5 pr-md-7 text-center text-md-right">
                            <span class="eyebrow text-dark-blue mb-1">Enfócate en tu operación.</span>
                            <h3 class="h2">Puesta a punto.</h3>
                            <p class="text-gray-dark">La Puesta a Punto es un <strong>servicio de alto valor</strong> que permite a nuestros clientes concentrarse completamente en sus operaciones centrales, mientras nosotros nos encarga de asegurar que la infraestructura tecnológica esté optimizada, funcional y lista para el uso inmediato. Este servicio es especialmente valioso porque minimiza las interrupciones y maximiza la eficiencia operativa desde el primer día.</p>
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
                            <h3 class="h2">Experiencia y Confianza.</h3>
                            <p class="text-gray-dark">Nuestra experiencia nos ha permitido construir una <strong>reputación sólida</strong> en la industria TI, desarrollando Confianza con nuestros clientes mediante la entrega de soluciones tecnológicas efectivas, diseñadas para alinearse con las necesidades específicas y los objetivos estratégicos de cada cliente.</p>
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
                            <p class="text-dark-blue">Explora casos reales en donde hemos generado mejoras en la productividad de nuestros clientes.</p>
                            <a href="{{'https://wa.link/bitmovil'}}" target="_blank">
                                <button type="button" class="btn btn-rounded btn-with-ico btn-behance mt-2">Envía tu reseña <i class="icon-edit-2"></i></button>
                            </a>
                        </div>
                        <div class="col-lg-7 blockquote-list">
                            <blockquote class="blockquote blockquote-2 boxed" data-aos="fade-up">
                                <p>El soporte técnico de Bitmovil respondió eficazmente cuando más lo necesitábamos, manteniendo nuestras operaciones fluidas.</p>
                                <footer class="blockquote-footer">Luis García Luna - Megatravel</footer>
                            </blockquote>
                            <blockquote class="blockquote blockquote-2 boxed" data-aos="fade-up">
                                <p>La solución de videovigilancia de Bitmovil ha fortalecido la seguridad de nuestras instlaciones, dándonos gran tranquilidad.</p>
                                <footer class="blockquote-footer">Enrique Ramírez Aradillas - Glass & Glass</footer>
                            </blockquote>
                            <blockquote class="blockquote blockquote-2 boxed" data-aos="fade-up">
                                <p>Aquí puede estar tu próxima historia de éxito con Bitmovil.</p>
                                <footer class="blockquote-footer">Tu nombre - Empresa</footer>
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
                            <a href="{{'https://wa.link/bitmovil'}}" target="_blank" class="btn btn-red btn-rounded px-5">Contáctanos</a>
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
                                                <h5>¿Bitmovil personaliza las soluciones según las necesidades de mi empresa?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">Sí, en Bitmovil nos especializamos en personalizar nuestras soluciones tecnológicas para adaptarlas específicamente a las necesidades y requisitos únicos de cada empresa. Este enfoque personalizado asegura que cada aspecto de la solución, desde el hardware y el software hasta la configuración y el soporte, se alinea perfectamente con los objetivos operativos y estratégicos de tu negocio. Al colaborar estrechamente contigo durante el proceso de consulta y diseño, garantizamos que la solución final no solo cumpla sino que supere tus expectativas, maximizando así la eficiencia y la efectividad de tus operaciones tecnológicas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" data-accordion data-aos="fade-up">
                                            <div class="accordion-control" data-control>
                                                <h5>¿Ofrece Bitmovil servicios de instalación o solo la entrega de equipos tecnológicos?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">Bitmovil ofrece mucho más que solo la entrega de equipos tecnológicos. Proporcionamos un servicio completo que incluye la instalación y la configuración de los equipos, asegurando que funcione de manera óptima. Nuestro equipo técnico especializado realiza todas las fases del proceso de instalación, desde el desembalaje y la configuración física hasta la integración de software y la puesta en marcha del sistema. Además, ofrecemos pólizas de soporte continuo  para garantizar que tu equipo aproveche al máximo las nuevas tecnologías implementadas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" data-accordion data-aos="fade-up">
                                            <div class="accordion-control" data-control>
                                                <h5>¿Cómo puedo obtener una cotización para un proyecto?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">
                                                        Para obtener una cotización para tu proyecto con nosotros, puedes contactarnos de las siguientes maneras:
                                                        <br>
                                                        <strong>WhatsApp</strong>: Envía un mensaje rápido a través del número disponible en nuestro sitio web para una comunicación directa y ágil.
                                                        <br>
                                                        <strong>Llamada</strong>: Marca al 83 3227 2527 para discutir tus necesidades con nuestro equipo de ventas o de ingeniería.
                                                        <br>
                                                        <strong>Correo</strong>: Envía tus requisitos detallados a contacto@bitmovil.mx, especialmente útil para enviar documentación de apoyo.
                                                        <br>
                                                        Nuestro equipo está preparado para asistirte en cualquiera de estos canales, asegurando una respuesta efectiva y personalizada a tus necesidades.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" data-accordion data-aos="fade-up">
                                            <div class="accordion-control" data-control>
                                                <h5>¿Las visitas técnicas de reconocimiento tendrán algún costo para mi empresa?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">Las visitas técnicas de reconocimiento no tienen ningún costo dentro de la Zona Conurbada de Tampico. Para ubicaciones fuera de esta área, en el resto de la República Mexicana, aplicamos una tarifa de traslado. Sin embargo, esta tarifa se bonificará al momento de contratar nuestros servicios, asegurando que sólo inviertes en las soluciones que proporcionamos.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" data-accordion data-aos="fade-up">
                                            <div class="accordion-control" data-control>
                                                <h5>¿Bitmovil ofrece garantías por los servicios y soluciones proporcionadas?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">Sí, en Bitmovil todos nuestros proyectos incluyen garantías que cubren aspectos específicos de rendimiento y fiabilidad. Además, la garantía puede ser complementada con un contrato de póliza de mantenimiento preventivo y correctivo. Este contrato no solo asegura o extiende la vida útil de la solución, sino que también ofrece beneficios como respuesta rápida a incidencias, reducción de costos operativos a largo plazo y minimización de tiempos de inactividad. Estas pólizas están diseñadas para proporcionar tranquilidad y asegurar que tus sistemas funcionen de manera eficiente y continua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2 mt-md-0">
                                    <div class="accordion-group accordion-group-minimal" data-accordion-group>
                                        <div class="accordion" data-accordion data-aos="fade-up">
                                            <div class="accordion-control" data-control>
                                                <h5>¿Hay financiamiento disponible para el proyecto tecnológico de mi empresa?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">

                                                        Sí, ofrecemos opciones de financiamiento para tu proyecto tecnológico. Contamos con dos planes de leasing en colaboración con las principales financieras de México, diseñados para facilitar la adquisición de tecnología para proyectos que superen los 10 mil USD. Esto te permite implementar soluciones avanzadas sin la necesidad de una inversión inicial importante, liberando recursos que puedes destinar al core business de tu empresa, optimizando así tu capital en áreas esenciales para el crecimiento y la innovación.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" data-accordion data-aos="fade-up">
                                            <div class="accordion-control" data-control>
                                                <h5>¿Puedo escalar las soluciones conforme crece mi negocio?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">Sí, en Bitmovil, diseñamos nuestras soluciones de TI para ser escalables, permitiendo ajustarlas en la medida que tu negocio crece y cambia. Esto significa que podemos aumentar la capacidad de tus sistemas, agregar más usuarios, incrementar funcionalidades o integrar nuevas tecnologías sin interrumpir las operaciones existentes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" data-accordion data-aos="fade-up">
                                            <div class="accordion-control" data-control>
                                                <h5>¿Cuánto tiempo lleva implementar una solución completa de TI?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">El tiempo necesario para implementar una solución completa de TI varía según la complejidad y el alcance del proyecto. Una implementación básica puede completarse en un plazo de 4 a 8 semanas. Sin embargo, para proyectos más complejos o personalizados, la implementación podría extenderse. En Bitmovil, trabajamos estrechamente con nuestros clientes para establecer un cronograma detallado basado en una evaluación precisa de sus necesidades y los requisitos del proyecto. Esto nos permite planificar y garantizar que todos los componentes del sistema estén operativos dentro del tiempo acordado.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" data-accordion data-aos="fade-up">
                                            <div class="accordion-control" data-control>
                                                <h5>¿Cómo asegura Bitmovil la calidad de sus proyectos?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">Bitmovil sigue rigurosos estándares de calidad en todos sus proyectos. Implementamos metodologías de gestión de proyectos reconocidas y contamos con certificaciones actualizadas para garantizar que cada solución cumpla con las expectativas. Además, realizamos pruebas exhaustivas antes de la entrega final para asegurar la funcionalidad y el rendimiento óptimo de las soluciones implementadas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" data-accordion data-aos="fade-up">
                                            <div class="accordion-control" data-control>
                                                <h5>¿Cómo maneja Bitmovil las actualizaciones o necesidades futuras de expansión de los sistemas?</h5>
                                            </div>
                                            <div class="accordion-content" data-content>
                                                <div class="accordion-content-wrapper">
                                                    <p class="text-gray">Bitmovil diseña todas sus soluciones con la escalabilidad en mente. Esto significa que estamos preparados para actualizar o expandir los sistemas según las necesidades de crecimiento de tu negocio. Ofrecemos consultas periódicas post-implementación y evaluamos la infraestructura existente para asegurar que continúe cumpliendo con tus requerimientos operativos y estratégicos a medida que tu empresa evoluciona.</p>
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


