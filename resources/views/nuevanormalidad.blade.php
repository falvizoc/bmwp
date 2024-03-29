@extends('layout.layout')
@section('title', 'Nueva Normalidad') <!--Personaliza el título del conenido de la página-->

@section('recaptcha')
    {!! htmlScriptTagJsApi(['action' => 'homepage']) !!}
@endsection

@section('content')
    <section class="bg-light mt-6">
        <div class="container-fluid separator-bottom">
            <div class="row  ">
                <div class="col-md-10 ">
                    <!--<h5>Adapta tu negocio a la <b>Nueva Normalidad</b></h5>-->
                    <h2 class="pt-8 text-center">Cumple con los lineamientos de la autoridad y <br><b class="text-success"> devuélvele la confianza a tus clientes.</b></h2>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/productosnn.png')}}"  alt="Productos nueva normalidad">
                </div>
                <div class="col-md-5 pt-8">
                    <h5><b class="text-center">Sigue estos tres sencillos pasos</b> </h5>
                    <br>
                    <small>Da click aquí</small>
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
                        <div class="accordion open" data-accordion>
                            <div class="accordion-control" data-control>
                                <h5>Contáctanos</h5>
                            </div>
                            <div class="accordion-content" data-content>
                                <div class="accordion-content-wrapper">
                                    <!--

                                    <button type="button" class="btn btn-skype btn-sm" data-toggle="modal" data-target="#contacto" >Mas información</button>
                                    -->
                                    <p>Diseñemos juntos la mejor solución que cumpla con la autoridad y se ajuste a las necesidades de tu empresa.</p>
                                    <x-form method="POST" class="form-group container" :action="url('contacto')">
                                        <x-field name="nombre" value="{{ old('nombre') }}" ></x-field>
                                        {!! $errors->first('nombre','<small class="text-red">:message</small>') !!}
                                        <x-field name="correo_electrónico" type="email" value="{{ old('correo_electrónico') }}" ></x-field>
                                        {!! $errors->first('correo_electrónico','<small class="text-red">:message</small>') !!}
                                        <x-field name="teléfono" type="tel" value="{{ old('teléfono') }}" ></x-field>
                                        {!! $errors->first('teléfono','<small class="text-red">:message</small>') !!}
                                        <x-field name="empresa" value="{{ old('empresa') }}"></x-field>
                                        {!! $errors->first('empresa','<small class="text-red">:message</small>') !!}
                                        <x-field name="comentarios" value="{{ old('comentarios') }}" ></x-field>
                                        {!! $errors->first('comentarios','<small class="text-red">:message</small>') !!}
                                        <br>
                                        <button type="submit" id="btnenviar" class="btn btn-skype btn-sm btn-block" >Enviar</button>
                                    </x-form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pb-5 ">
                        <div class="row justify-content-center">
                            <h2 class="pb-3 text-center">Mas que vender productos, diseñamos soluciones</h2>
                            <div class="col-md-10">
                                <ul class="feature-list gutter-4 align-self-center">
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center badge-yellow">
                                            <i class="icon-thermometer-three-quarters fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">Cámaras térmicas</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center badge-green">
                                            <i class="icon-user-circle fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">Reconocmiento facial</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center badge-red">
                                            <i class="icon-clock fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">Control de asistencia</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center badge-pill badge-cyan">
                                            <i class="icon-alert-octagon fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">Sistema de Alertas</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center badge-yellow">
                                            <i class="icon-hand-stop-o fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase  fs-14 letter-spacing">acceso sin contacto</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media bordered rounded p-2 align-items-center badge-green">
                                            <i class="icon-users fs-24 text-black mr-2"></i>
                                            <div class="media-body">
                                                <span class="mt-0 text-uppercase fs-14 letter-spacing">Detección masiva</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
    </section>

    <div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-end">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="icon-x"></span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h3 id="modal-title"></h3>
                    <div id="modal-response"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Aceptar</button>
                </div>

            </div>
        </div>
    </div>




@endsection
