<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.partials.head')
@yield('recaptcha')
<!-- IMPORTANT!!! remember CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        @include('layout.partials.sidebar')
        <!-- /Sidebar -->
        <!-- Wrapper -->
        <div id="page-content-wrapper">
            @include('layout.partials.nav')
            <!-- Content -->
            @yield('content')
            <!-- /Content -->
        </div>
        <!-- /Wrapper -->
    </div>
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
@yield('map-script')
</body>
</html>
