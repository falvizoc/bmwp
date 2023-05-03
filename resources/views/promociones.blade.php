@extends('layout.layout')
@section('title', 'Promociones') <!--Personaliza el título del conenido de la página-->
@section('content')
         <!--carousel-->
    <section class="pt-10 bg-light">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Promociones <b>Mayo 2023</b></h2>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">Promociones válidas durante el mes de mayo o hasta agotar existencias. Si deseas mayor información envíanos un Whatsapp
                            <a href="{{url('https://wa.link/bitmovil')}}" class="icon-whatsapp text-green"></a> o mándanos un email
                            <a href="mailto:ventas@bitmovil.mx" class="icon-mail text-skype"></a></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="owl-carousel visible gallery" data-items="[2]" data-autoplay="true" data-loop="true" data-dots="true" data-margin="20">
                            <figure class="user">
                                <img src="{{asset('assets/img/promos/1.png')}}" alt="Promo">
                                <figcaption class="user-caption">
                                   <ul class="socials bordered">
                                        <li><a href="{{url('/promociones')}}" class="icon-info2 fs-20"></a></li>
                                        <li><a href="{{url('https://wa.link/bitmovil')}}" class="icon-whatsapp fs-20"></a></li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <figure class="user">
                                <img src="{{asset('assets/img/promos/2.png')}}" alt="Promo">
                                <figcaption class="user-caption">
                                   <ul class="socials bordered">
                                        <li><a href="{{url('https://www.productos-info.com/s/mx/es/25440/b6e33c59fc0af34db9d4112dcd48b248/x/-US$/FAAC-620-R-FAAC-189187.html')}}" target="_blank" class="icon-info2 fs-20"></a></li>
                                        <li><a href="{{url('https://wa.link/bitmovil')}}" class="icon-whatsapp fs-20"></a></li>
                                    </ul>
                                </figcaption>
                            </figure>

                            <figure class="user">
                                <img src="{{asset('assets/img/promos/3.png')}}" alt="Promo">
                                <figcaption class="user-caption">
                                   <ul class="socials bordered">
                                        <li><a href="{{url('https://www.productos-info.com/s/mx/es/25440/b6e33c59fc0af34db9d4112dcd48b248/x/-US$/DS-D5B65RBB-HIKVISION-200386.html')}}" target="_blank" class="icon-info2 fs-20"></a></li>
                                        <li><a href="{{url('https://wa.link/bitmovil')}}" class="icon-whatsapp fs-20"></a></li>
                                    </ul>
                                </figcaption>
                            </figure>

                            <figure class="user">
                                <img src="{{asset('assets/img/promos/4.png')}}" alt="Promo">
                                <figcaption class="user-caption">
                                   <ul class="socials bordered">
                                        <li><a href="{{url('https://www.productos-info.com/s/mx/es/25440/b6e33c59fc0af34db9d4112dcd48b248/x/ODU1MDA=-MX$/DS-96128NI-I16-HIKVISION-157240.html')}}" target="_blank" class="icon-info2 fs-20"></a></li>
                                        <li><a href="{{url('https://wa.link/bitmovil')}}" class="icon-whatsapp fs-20"></a></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/carousel -->


@endsection
