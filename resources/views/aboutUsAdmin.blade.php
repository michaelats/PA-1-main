@extends('layout.admin')

@section('title','Harian - Tentang Kami Admin')

@section('container')
<style>
	#aboutus {
  background-image: url("../img/tentangkami.png");
  background-size: cover;
}
</style>
	<div class="parallax-overlay first-widget" id="aboutus">
		<div class="parallax-overlay">
			<div class="container home-intro-content pageTitle">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title" data-aos="fade-up-left" data-aos-duration="1500">Tentang kami</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
<br><br>
	<div class="container">	
		<div class="row">
			<div class="portfolio-holder col-md-12" id="Grid">
				<button  class="btn btn-info" type="button" onclick="window.location.href='/tambahAbout'"> <i class="far fa-plus-square"></i> Tambah Data</button> <br><br>
			<table class="table table-responsive table-hover table-bordered text-center"  style="width: 100%">
				<thead class="th">
					<tr>
						<td>Subjek</td>
						<td>Deskripsi</td>
						<td>Sumber Referensi</td>
						<td>Gambar </td>
						<td colspan="2">Action</td>
					  </tr>
				</thead>
				<tbody>
				@foreach ($aboutus as $about)
					<tr>
						<td>{{$about->Nama}}</td>
						<td><textarea name="" id="" cols="60" rows="5" style="background-color: transparent">{{$about->deskripsi}}</textarea></td>
						<td>{{$about->sumber}}</td>
						<td><img src="{{url('imgAboutUs/'.$about->FotoAboutUs)}}" alt="" style="width:150px;"></td>
						  <td>
								  <Button class="btn btn-primary" type="button" onclick="window.location.href='/About/edit/{{$about->id_aboutUs}}'">
									  <i class="far fa-edit"></i> Edit                                                                   
								  </Button> 
								  <Button class="btn btn-danger" type="button" onclick="window.location.href='/about/delete/{{$about->id_aboutUs}}' ">
									  <i class="far fa-trash-alt"></i> Hapus
								  </Button>
						  </td>
					  </tr>
					@endforeach
				</tbody>
		  </table>
			</div>
		</div>
	</div>	
@endsection