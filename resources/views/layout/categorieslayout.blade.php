<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.partials.head')
@yield('recaptcha')
<!-- IMPORTANT!!! remember CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@include('layout.partials.nav')
@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
@yield('map-script')
</body>
</html>
