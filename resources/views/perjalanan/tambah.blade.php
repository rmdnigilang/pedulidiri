@extends('layout.master')

 @section('content')
 
<div align = 'center'>
	

	<h3>Data perjalanan</h3>

	<br/>
	<br/>
	<!-- <form action="/perjalanan/store" method="post">
		{{ csrf_field() }}
		<label for="id_user">
		ID User :<input type="number" name="id_user" required="required"> <br/>
		</label>
		<br>
		<label for="date">
		Tanggal :<input type="date" name="tgl_perjalanan" required="required"> <br/>
		</label>
		<br>
		<label for="time">
		Jam :<input type="time" name="jam" required="required"> <br/>
		</label>
        <br>
		Lokasi :<input type="text" name="lokasi" required="required"> <br/>
		<br>
        Suhu Tubuh :<input type="number" name="suhu_tubuh" required="required"> <br/>
		<br>
		<input type="submit" value="Simpan Data">	
		
		<button><a href="/perjalanan">Kembali</a></button>	
	</form>
	</div> -->
	<!-- <div class="container">
          <div class="row">
            <div class="col-lg-6 z-index-2 mb-5"><img class="w-100" src="{{asset('admin/assets/img/gallery/Forms-bro.png')}}"/></div>
            <div class="col-lg-6 z-index-2">
              <form class="row g-3" action="/perjalanan/store" method="post">
			  {{ csrf_field() }}
                <div class="col-md-6">
                  <label class="visually-hidden" for="tgl_perjalanan">Tanggal</label>
                  <input class="form-control form-livedoc-control" name="tgl_perjalanan" type="date" placeholder="Tanggal" required="required"/>
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="jam">Jam</label>
                  <input class="form-control form-livedoc-control" name="jam" type="time" placeholder="Jam" required="required" />
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="lokasi">Lokasi</label>
				  <input class="form-control form-livedoc-control" name="lokasi" type="text" placeholder="lokasi" required="required"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="suhu_tubuh">Suhu Tubuh</label>
                  <input class="form-control form-livedoc-control" name="suhu_tubuh" type="number" placeholder="Suhu tubuh" required="required"  />
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary rounded-pill" type="submit" value="Simpan Data">Tambah</button>
					<br>
					<button  class="btn btn-primary rounded-pill"><a href="/perjalanan">Kembali</a></button>	
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div> -->
        <!-- Button trigger modal -->

  
@endsection