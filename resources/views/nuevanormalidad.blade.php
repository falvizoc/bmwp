@extends('layout.layout')
@section('title', 'Nueva Normalidad') <!--Personaliza el título del conenido de la página-->
@section('content')
    <section class="bg-light mt-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <!--<h5>Adapta tu negocio a la <b>Nueva Normalidad</b></h5>-->
                    <h2>Cumple con los lineamientos de la autoridad y <br><b class="text-success"> devuélvele la confianza a tus clientes.</b></h2>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/productosnn.png')}}"  alt="Productos nueva normalidad">
                </div>
                <div class="col-md-5 pt-8">
                    <h5><b class="text-center">Sigue estos tres sencillos pasos</b> </h5>
                    <div class="accordion-group accordion-group-steps" data-accordion-group>
                        <div class="accordion" data-accordion>
                            <div class="accordion-control" data-control>
                                <h5>Infórmate</h5>
                            </div>
                            <div class="accordion-content" data-content>
                                <div class="accordion-content-wrapper">
                                    <p>Conoce los lineamientos oficiales para la reapertura</p>
                                    <a class="btn btn-sm btn-skype" href="{{url('http://dof.gob.mx/2020/SALUD/Acuerdo_Salud_290520_VES.pdf')}}" target="_blank">Consultalos aquí</a>

                                </div>
                            </div>
                        </div>
                        <div class="accordion" data-accordion>
                            <div class="accordion-control" data-control>
                                <h5>Prepárate</h5>
                            </div>
                            <div class="accordion-content" data-content>
                                <div class="accordion-content-wrapper">
                                    <p>Identifica los requisitos indispensables que debes cumplir para la reapertura segura de tu empresa, es importante determinar el tamaño de tu negocio, así fácilmente los podrás encontrar. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" data-accordion>
                            <div class="accordion-control" data-control>
                                <h5>Contáctanos</h5>
                            </div>
                            <div class="accordion-content" data-content>
                                <div class="accordion-content-wrapper">
                                    <p>Diseñemos juntos la mejor solución que cumpla con la autoridad y se ajuste a las necesidades de tu empresa.</p>
                                    <a href="" class="btn btn-skype btn-sm">Mas información</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid pb-5">
                        <div class="row justify-content-center">
                            <h3 class="pb-3 text-center">Mas que vender productos, diseñamos soluciones</h3>

                            <div class="col-md-10">
                                <ul class="feature-list gutter-1">
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center">
                                            <i class="icon-thermometer-three-quarters fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">Cámaras térmicas</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center">
                                            <i class="icon-clock fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">Control de asistencia</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center">
                                            <i class="icon-alert-octagon fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">Sistema de Alertas</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center">
                                            <i class="icon-hand-stop-o fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">acceso sin contacto</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center">
                                            <i class="icon-users fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">Detección e identificación masiva</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center">
                                            <i class="icon-user-circle fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">Reconocmiento facial</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
    </section>
@endsection
