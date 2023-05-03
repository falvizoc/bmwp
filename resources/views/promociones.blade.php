@extends('layout.layout')
@section('title', 'Promociones del mes') <!--Personaliza el título del conenido de la página-->
@section('content')
    <section class="bg-light">
        <H1 class="text-center">Promociones Mayo 2023</H1>
        <!-- carousel -->
        <section class="pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="owl-carousel visible gallery" data-items="[2]" data-autoplay="true" data-loop="true" data-dots="true" data-margin="20">
                            <figure class="photo">
                                <img src="{{asset('assets/img/promos/faac.png')}}" alt="Promo">
                            </figure>

                            <figure class="photo">
                                <img src="{{asset('assets/img/promos/faac.png')}}" alt="Promo">
                            </figure>

                            <figure class="photo">
                                <img src="{{asset('assets/img/promos/faac.png')}}" alt="Promo">
                            </figure>

                            <figure class="photo">
                                <img src="{{asset('assets/img/promos/faac.png')}}" alt="Promo">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / carousel -->

@endsection
