 
 @extends('layout.master')

 @section('content')

 <div class="bg-holder bg-size" style="background-image:url(admin/assets/img/gallery/hero-bg.png);background-positionz:fixed;background-size:cover;">
 </div>
	<br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
	<table class="table table-striped">
  		<tr>
			<th >No</th>
			<th >Tanggal perjalanan</th>
			<th >Jam</th>
			<th >Lokasi</th>
			<th >Suhu tubuh</th>
			<th >Aksi</th>
		</tr>
		@foreach($perjalanan as $gg => $key)
		<tr>
			<td>{{ $gg+1}}</td>
			<td>{{ $key->tgl_perjalanan }}</td>
			<td>{{ $key->jam }}</td>
			<td>{{ $key->lokasi }}</td>
      <td>{{ $key->suhu_tubuh }}</td>
			<td>
				
			<a href="/perjalanan/destroy/{{ $key->id }}" class="btn btn-sm btn- btn-outline-danger rounded-pill order-1 order-lg-0 ms-lg-4">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<br>
	<center>
	<button type="button"class="btn btn-sm btn-outline-info rounded-pill order-1 order-lg-0 ms-lg-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Closes"></button>
      </div>
      <div class="modal-body">
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
                    <button class="btn btn-info rounded-pill" type="submit" value="Simpan Data">Tambah</button>
				        	<br>
                  </div>
                </div>
              </form>
      </div>
    </div>
  </div>
</div>
	</center>
</div>
</div>
</div>
@endsection






