@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
	<style type="text/css">
		/* From cssbuttons.io by @barisdogansutcu */
.download-button {
 position: relative;
 border-width: 0;
 color: white;
 font-size: 15px;
 font-weight: 600;
 border-radius: 4px;
 z-index: 1;
}

.download-button .docs {
 display: flex;
 align-items: center;
 justify-content: space-between;
 gap: 10px;
 min-height: 40px;
 padding: 0 10px;
 border-radius: 4px;
 z-index: 1;
 background-color: #242a35;
 border: solid 1px #e8e8e82d;
 transition: all .5s cubic-bezier(0.77, 0, 0.175, 1);
}

.download-button:hover {
 box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

.download {
 position: absolute;
 inset: 0;
 display: flex;
 align-items: center;
 justify-content: center;
 max-width: 90%;
 margin: 0 auto;
 z-index: -1;
 border-radius: 4px;
 transform: translateY(0%);
 background-color: #01e056;
 border: solid 1px #01e0572d;
 transition: all .5s cubic-bezier(0.77, 0, 0.175, 1);
}

.download-button:hover .download {
 transform: translateY(100%)
}

.download svg polyline,.download svg line {
 animation: docs 1s infinite;
}

@keyframes docs {
 0% {
  transform: translateY(0%);
 }

 50% {
  transform: translateY(-15%);
 }

 100% {
  transform: translateY(0%);
 }
}
	  </style>
	</head>
	
	
<body>
<div class="bg-holder bg-size" style="background-image:url(admin/assets/img/gallery/hero-bg.png);background-positionz:fixed;background-size:cover;">
 </div>
	<br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<div>
			<button class="download-button">
				<div class="docs"><svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="currentColor" height="20" width="20" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line y2="13" x2="8" y1="13" x1="16"></line><line y2="17" x2="8" y1="17" x1="16"></line><polyline points="10 9 9 9 8 9"></polyline></svg> <a href="/cetak_pdf"> CETAK </a></div>
				
			  </button>
			</div>
			<br>
			<form action="/user/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari user .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">

	</form>
			<br>
	<table class="table table-striped">
  		<tr>
                <th>No</th>
				<th>NIK</th>
				<th>Role</th>
				<th>Nama</th>
				<th>No.Telp</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Aksi</th>
		</tr>
		@foreach($user as $gg => $key)
		<tr>
			<td>{{ $gg+1}}</td>
			<td>{{ $key->nik }}</td>
			<td>{{ $key->role }}</td>
			<td>{{ $key->name }}</td>
            <td>{{ $key->tlp }}</td>
            <td>{{ $key->email }}</td>
            <td>{{ $key->alamat }}</td>
             
            @if ($key->role == "user")
			<td>	
			<a href="/admin/destroy/{{ $key->id }}" class="btn btn-sm btn- btn-outline-danger rounded-pill order-1 order-lg-0 ms-lg-4">Hapus</a>
			</td>
            @endif
		</tr>
		@endforeach
	</table>

</body>


@stop