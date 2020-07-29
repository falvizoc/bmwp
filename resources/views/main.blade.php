@extends('layout.mainlayout')
@section('title', 'Transformación Digital') <!--Personaliza el título del conenido de la página-->
@section('content')

    <section class="bg-light pt-8 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-white text-center">
                    <h1 class="display-4 text-blue-bm">Mercados verticales</h1>
                    <h3 class="text-dark">Soluciones aplicadas en distintas disciplinas.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="masonry row gutter-1">
                        <li class="col-md-4" data-aos="fade-up">
                            <article class="tile">
                                <div class="tile-image" style="background-image:  url('assets/img/industria.jpeg') "></div>
                                <div class="tile-content">
                                    <div class="tile-footer">
                                        <h3>Industria.</h3>
                                        <span class="text-white eyebrow mb-1">Petroquímica y Transformación</span>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="col-md-4" data-aos="fade-up">
                            <article class="tile tile-long">
                                <div class="tile-image" style="background-image: url(assets/img/transporte.jpeg)"></div>
                                <div class="tile-content">
                                    <div class="tile-footer">
                                        <h3>Logística.</h3>
                                        <span class="text-white eyebrow mb-1">Transporte y almacenamiento</span>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="col-md-4" data-aos="fade-up">
                            <article class="tile">
                                <div class="tile-image" style="background-image: url(assets/img/educación.jpeg)"></div>
                                <div class="tile-content">
                                    <div class="tile-footer">
                                        <h3>Educación.</h3>
                                        <span class="text-white eyebrow mb-1">Colegios y Universidades</span>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="col-md-4" data-aos="fade-up">
                            <article class="tile tile-long">
                                <div class="tile-image" style="background-image: url(assets/img/salud.jpeg)"></div>
                                <div class="tile-content">
                                    <div class="tile-footer">
                                        <h3>Salud.</h3>
                                        <span class="text-white eyebrow mb-1">Hospitales, Clínicas y Consultorios</span>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="col-md-4" data-aos="fade-up">
                            <article class="tile tile-long">
                                <div class="tile-image" style="background-image: url(assets/img/energía.jpeg)"></div>
                                <div class="tile-content">
                                    <div class="tile-footer">
                                        <h3>Energía.</h3>
                                        <span class="text-white eyebrow mb-1">Petróleo y Gas</span>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="col-md-4" data-aos="fade-up">
                            <article class="tile">
                                <div class="tile-image" style="background-image: url(assets/img/comercial.jpeg)"></div>
                                <div class="tile-content">
                                    <div class="tile-footer">
                                        <h3>Comercio.</h3>
                                        <span class="text-white eyebrow mb-1">Retail, Tiendas y Restaurantes</span>
                                    </div>
                                </div>
                            </article>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection

