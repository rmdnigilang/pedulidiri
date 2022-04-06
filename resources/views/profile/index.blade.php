@extends('layout.master')

@section('content')
<body div="your-element-selector">
<div class="container">
    <div class="main-body">
  
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <img @if(Auth::user()->foto != NULL && Auth::user()->foto > 0) src="{{asset('foto/'.Auth::user()->foto)}}"
                  @else src="{{asset('images/default.png')}}" @endif alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{Auth()->user()->name}}</h4>
                      <p class="text-secondary mb-1"> {{Auth()->user()->nik}} </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
               
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3" >
                      <h6 class="mb-0">NIK</h6>
                    </div>
                    <div class="col-sm-9 email-secondary">
                     {{Auth()->user()->nik}} 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" >
                    {{Auth()->user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3" >
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 email-secondary">
                      {{Auth()->user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3" >
                      <h6 class="mb-0">TELPON</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{Auth()->user()->tlp}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ALAMAT</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{Auth()->user()->alamat}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn-sm  btn-primary"  href="/profile/edit/{{$edit->id}}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>
<script>
VANTA.FOG({
  el: "#your-element-selector",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  highlightColor: 0xedebe1,
  midtoneColor: 0xa5ff
})
</script>
</body>
        @stop




