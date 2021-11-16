<!DOCTYPE html PUBLIC>
<html lang="en">

<head>
  <!-- Google Tag Manager -->

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="JB ONLINE SHOP" />
  <meta name="keywords" content="HTML, CSS, JavaScript" />
  <meta name="author" content="Jahangir Alam" />
  <title>JB ONLINE SHOP</title>

  <!-- favicon icon -->
  <link rel="icon" href="#" type="image/gif" sizes="16x16" />
  @include('layouts.frontend.partials.css')
</head>

<body>
  <!-- header section -->
@include('layouts.frontend.partials.header')
  <!-- header section end-->

@yield('content')

  @include('layouts.frontend.partials.footer')
  @include('layouts.frontend.partials.js')

</body>

</html>
