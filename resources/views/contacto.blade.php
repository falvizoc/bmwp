@extends ('layout.layout')
@section('title','Contacto')
@section('recaptcha')
    {!! htmlScriptTagJsApi(['action' => 'homepage']) !!}
@endsection
@section('content')
<!-- map -->
<section class="hero hero-with-header text-white">
    <div class="map">
        <div class="container">
            <div class="row vh-50 align-items-end">
                <div class="col-md-10">
                    <h1 class="mb-0">Tampico</h1>
                    <p>Ave. Hidalgo 5005 Ofna 208 <br> Fracc. Petrolera Chairel </p>
                </div>
            </div>
        </div>
        <div id="map" class="map-area"></div>
    </div>
</section>
<!-- / map -->

<!-- formulario de contacto -->
<section>
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12 text-white text-left">
                <h1 class="display-4 text-blue-bm">Contáctanos</h1>
                <h3 class="text-dark">Te responderemos muy pronto.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-form method="POST" class=" " action="{{ url('contacto') }}">
                    <div class="form-row mb-1">
                        <div class="col">
                            <x-field name="nombre" value="{{ old('nombre') }}" ></x-field>
                            {!! $errors->first('nombre','<small class="text-red">:message</small>') !!}
                        </div>
                        <div class="col">
                            <x-field name="correo_electrónico" type="email" value="{{ old('correo_electrónico') }}" ></x-field>
                            {!! $errors->first('correo_electrónico','<small class="text-red">:message</small>') !!}
                        </div>
                        <div class="col">
                            <x-field name="teléfono" type="tel" value="{{ old('teléfono') }}" ></x-field>
                            {!! $errors->first('teléfono','<small class="text-red">:message</small>') !!}
                        </div>
                    </div>
                    <div class="form-row mb-1">
                        <div class="col">
                            <x-field name="comentarios" value="{{ old('comentarios') }}" ></x-field>
                            {!! $errors->first('comentarios','<small class="text-red">:message</small>') !!}
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <button type="submit" id="btnenviar" class="btn btn-skype px-5 " >Enviar</button>
                        </div>
                    </div>
                    <div style="visibility: hidden;">
                        <x-field name="empresa" ></x-field>
                    </div>
                </x-form>
            </div>
        </div>

    </div>
</section>
<!-- / formulario de contacto -->

<!-- modal -->
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
<!-- / modal -->




@endsection

@section('map-script')
    <script>
        function initMap() {
            // Styles a map in night mode.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 22.263897, lng: -97.875351},
                zoom: 15,
                disableDefaultUI: true,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#bdbdbd"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#181818"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#1b1b1b"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#2c2c2c"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#8a8a8a"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#373737"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#3c3c3c"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#4e4e4e"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#3d3d3d"
                            }
                        ]
                    }
                ]
            });

            var pin ='../../assets/img/pin-green.svg';

            var marker = {
                url: pin,
                //state your size parameters in terms of pixels
                size: new google.maps.Size(70, 60),
                scaledSize: new google.maps.Size(70, 60),
                origin: new google.maps.Point(0,0)
            }

            var marker = new google.maps.Marker({
                position: map.getCenter(),
                icon: pin,
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEYUBdLp0Z4iGm0lSitHNMl4WmNIxpmog&callback=initMap"
            async defer></script>
@endsection
