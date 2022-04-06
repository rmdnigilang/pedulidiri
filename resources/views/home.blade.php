
@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <!-- penulisan internal css dalam tag head -->
  <style type="text/css">
  /* From cssbuttons.io by @westitan */
.vape {
 position: relative;
 padding: 19px 36px;
 display: block;
 text-decoration: none;
 text-transform: uppercase;
 overflow: hidden;
 border-radius: 40px;
 border: none;
}

.vape span {
 position: relative;
 color: #fff;
 font-family: Arial;
 letter-spacing: 8px;
 z-index: 1;
}

.vape .liquid {
 position: absolute;
 top: -80px;
 left: 0;
 width: 100%;
 height: 200px;
 background: #4973ff;
 box-shadow: inset 0 0 50px rgba(0, 0, 0, .5);
 transition: .5s;
}

.vape .liquid::after,
.vape .liquid::before {
 content: '';
 width: 200%;
 height: 200%;
 position: absolute;
 top: 0;
 left: 50%;
 transform: translate(-50%, -75%);
 background: #fff;
}

.vape .liquid::before {
 border-radius: 45%;
 background: rgba(20, 20, 20, 1);
 animation: animate 5s linear infinite;
}

.vape .liquid::after {
 border-radius: 40%;
 background: rgba(20, 20, 20, .5);
 animation: animate 10s linear infinite;
}

.vape:hover .liquid {
 top: -120px;
}

@keyframes animate {
 0% {
  transform: translate(-50%, -75%) rotate(0deg);
 }

 100% {
  transform: translate(-50%, -75%) rotate(360deg);
 }
}
  </style>
</head>
<body>
<div class="bg-holder bg-size" style="background-image:url(admin/assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="{{asset('admin/assets/img/gallery/Traveling.png')}}" alt="hero-header" /></div> 
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">Catat <strong>perjalanan</strong> anda untuk<br />mengetahui&nbsp;<strong>kesehatan </strong>anda.</h1>
              <p class="fs-1 mb-5">Anda bisa mendapatkan pelayanan yang Anda butuhkan 24/7 </p>
            <div>
            </div>
          </div>
        </div>
        </body>
@endsection

