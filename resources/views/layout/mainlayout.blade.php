<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
    @include('cookie-consent::index')
    @include('layout.partials.nav')
    @include('layout.partials.header')
    @include('layout.partials.engineering')
    @yield('content')
    @include('layout.partials.partnerscomputo')
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
 </body>
</html>
