<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JB E-commerce - @yield('title')</title>

    @include('layouts.partials.css')
    @notifyCss
</head>
<body>

<div class="wrapper">
    <!--page-wrapper-->
    @include('layouts.partials.sidebar')
    @include('layouts.partials.header')
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
            <!--end page-content-wrapper-->
        </div>
        <!--end page-wrapper-->
        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">© 2021 JB E-commerce All Rights Reserved </p>
        </div>
        <!-- end footer -->
    </div>

{
     @include('layouts.partials.js')

</body>
</html>
