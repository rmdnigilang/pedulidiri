@extends('layout.master')
@section('content')
<body div="your-element-selector">
<div class="container">
<div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <img @if(Auth::user()->foto != NULL && Auth::user()->foto > 0)src="{{asset('foto/'.Auth::user()->foto)}}"
                    @else src="{{asset('images/default.png')}}" @endif alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <h4>{{ $edit->name }}</h4>
                      <p class="text-muted font-size-sm">{{auth()->user()->nik}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
              <form action="/profile/update/{{$edit->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3" >
                      <h6 class="mb-0">NIK</h6>
                      <input class="form-controler" type="number" name="nik" value="{{$edit->nik}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3" >
                      <h6 class="mb-0">NAMA</h6>
                      <input class="form-controler" type="text" name="name" value="{{$edit->name}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-sm-3" >
                      <h6 class="mb-0">EMAIL</h6>
                      <input class="form-controler" type="email" name="email" value="{{$edit->email}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-sm-3" >
                      <h6 class="mb-0">TELFON</h6>
                      <input class="form-controler" type="number" name="tlp" value="{{$edit->tlp}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-sm-3" >
                      <h6 class="mb-0">Foto</h6>
                      <input class="form-controler" type="file" name="foto">
                    </div>
                  </div>
                  <hr>
                                  {{-- provinsi --}}
                                    <div class="row mb-3">
                                      <label for="company" class="col-md-4 col-lg-3 col-form-label"><h6 class="mb-0">Provinsi</h6></label>
                                         <div class="col-md-8 col-lg-9">
                                            <select class="custom-select" name="selectProvinsi" id="selectProvinsi">
                                                {{-- <option>Provinsi</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- kabupaten/kota --}}
                                    <div class="row mb-3">
                                      <label for="company" class="col-md-4 col-lg-3 col-form-label"><h6 class="mb-0">Kabupaten/Kota</h6></label>
                                         <div class="col-md-8 col-lg-9">
                                            <select class="custom-select" name="selectKabupaten" id="selectKabupaten">
                                                {{-- <option>Kabupaten</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- kecamatan --}}
                                    <div class="row mb-3">
                                      <label for="company" class="col-md-4 col-lg-3 col-form-label"><h6 class="mb-0">Kecamatan</h6></label>
                                         <div class="col-md-8 col-lg-9">
                                            <select class="custom-select" name="selectKecamatan" id="selectKecamatan">
                                                {{-- <option value="Kecamatan"></option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- kelurahan --}}
                                    <div class="row mb-3">
                                      <label for="company" class="col-md-4 col-lg-3 col-form-label"><h6 class="mb-0">Kelurahan</h6></label>
                                         <div class="col-md-8 col-lg-9">
                                            <select class="custom-select" name="selectKelurahan" id="selectKelurahan">
                                                {{-- <option> Kelurahan </option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- final alamat --}}
                                    <div class="form-group">
                                        <label class="form-label"><h6 class="mb-0">Alamat</h6></label>
                                        <textarea class="form-control" name="alamat" id="alamat">{{$data->alamat ?? ''}}</textarea>
                                    </div>
                                    <hr>

              <div class="row">
                    <div class="col-sm-12">
                      <button type="submit" class="btn-sm btn-primary">Save </button>
                    </div>
                  </div>
                  </div>

                  <script>
        let selectProvinsi = document.getElementById('selectProvinsi');
        let selectKabupaten = document.getElementById('selectKabupaten');
        let selectKecamatan = document.getElementById('selectKecamatan');
        let selectKelurahan = document.getElementById('selectKelurahan');
        let alamat = document.getElementById('alamat');
        document.addEventListener('DOMContentLoaded', function(){
            fetchProvinsi();
            selectKabupaten.style.display = "none";
            selectKecamatan.style.display = "none";
            selectKelurahan.style.display = "none";
            getValueToAlamat();
        });
        const config = {
            method : 'GET'
        }
        // fetch provinsi get data
        async function fetchProvinsi(){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`;
            await fetch(URL, config)
            .then(response => response.json())
            // .then(provinsi => console.log(provinsi))
            .then(provinsi => {
                if(provinsi != null || undefined){
                    provinsi.map(data=>{
                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectProvinsi.appendChild(opt);
                        // console.log(selectProvinsi)
                    })
                }else{
                    let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectProvinsi.appendChild(opt);
                }
            }).catch(error => alert(`Data provinsi tidak ada`));
        }
        // fetch kabupaten/kota get data
        async function fetchKabupaten(id){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
            .then(response => response.json())
            .then(kabupaten =>{
                if (kabupaten !== null || undefined) {
                        kabupaten.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKabupaten.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKabupaten.appendChild(opt);
                    }
            })
        }
        // fetch kecamatan get data
        async function fetchKecamatan(id){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? ""  : id}.json`;
            await fetch(URL, config)
            .then(response => response.json())
            .then(kecamatan =>{
                if (kecamatan !== null || undefined) {
                        kecamatan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKecamatan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKecamatan.appendChild(opt);
                    }
            })
        }
    
        async function fetchKelurahan(id){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
            .then(response => response.json())
            .then(kelurahan => {
                if(kelurahan !== null || undefined){
                    kelurahan.map(data => {
                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectKelurahan.appendChild(opt);
                    })
                }else{
                    let opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "Data Tidak Tersedia";
                    selectKelurahan.appendChild(opt);
                }
            })
        }
        selectProvinsi.addEventListener('change', () => {
            fetchKabupaten(selectProvinsi.value);
            selectKabupaten.style.display = "block";
            selectKabupaten.innerHTML = '';
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        
        selectKabupaten.addEventListener('change', () => {
            fetchKecamatan(selectKabupaten.value);
            selectKecamatan.style.display = "block";
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        
        selectKecamatan.addEventListener('change', () => {
            fetchKelurahan(selectKecamatan.value);
            selectKelurahan.style.display = "block";
            selectKelurahan.innerHTML = '';
        });
        function getValueToAlamat() {
            alamat.addEventListener('change', () => {
                let alamatText = alamat.value;
                document.getElementById('alamat').value = `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                // console.log(`${alamatText}, ${selectKelurahan.options[  selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
                
            });
        }
    </script>
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