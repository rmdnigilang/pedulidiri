
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>PEDULI DIRI</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('admin/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('admin/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{asset('admin/assets/css/theme.css')}}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
       @include('layout.include.navbar')
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
       @yield('content')
      </section>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('admin/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/is/is.min.js')}}"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('admin/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/theme.js')}}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>