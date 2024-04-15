<!DOCTYPE html>
<html lang="es">
<head>
@yield('metas')
@include('layout.partials.head')
@yield('recaptcha')
<!-- IMPORTANT!!! remember CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body data-aos-easing="ease" data-aos-duration="800" data-aos-delay="0">
<main>
@include('layout.partials.nav')
@yield('content')
<!-- Sección Leasing -->
@include('layout.partials.leasing')
<!-- /Sección Leasing -->

<!-- Sección ¿Por qué elegir Bitmovil? -->
@include('layout.partials.elegirBitmovil')
<!-- /Sección ¿Por qué elegir Bitmovil?-->

<!-- Sección Casos de éxito -->
@include('layout.partials.casosExito')
<!-- /Sección Casos de éxito-->

<!-- Sección CTA Secundario -->
@include('layout.partials.ctaSecundario')
<!-- /Sección CTA Secundario-->

<!-- Sección FAQs -->
@include('layout.partials.faqs')
<!-- /Sección FAQs -->
</main>
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
@yield('map-script')
</body>
</html>
