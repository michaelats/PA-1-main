@extends('layout.admin')

@section('title','Harian - Galeri')

<style>
	@import url('https://fonts.googleapis.com/css2?family=Orelega+One&display=swap');
	.th{
		font-family: 'Orelega One', cursive;
	}
</style>
@section('container')
<div class="first-widget parallax" id="portfolio" >
	<div class="parallax-overlay">
		<div class="container pageTitle">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h2 class="page-title" data-aos="fade-up"
					data-aos-anchor-placement="top-bottom"  data-aos-duration="1500">Galeri Kami</h2>
				</div> <!-- /.col-md-6 -->
				<div class="col-md-6 col-sm-6 text-right">
					<span class="page-location">Beranda - Galeri</span>
				</div> <!-- /.col-md-6 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->
<br><br>
<div class="container">
	<div class="row" data-aos="fade-up" data-aos-duration="3000">
		<button  class="btn btn-info" type="button" onclick="window.location.href='/tambahgaleri'"> <i class="far fa-plus-square"></i> Tambah Data</button> <br><br>
		<div class="portfolio-holder" id="Grid">
			{{$galeri->links()}}
			<table class="table table-responsive table-hover table-bordered text-center">
				<thead class="th">
					<tr>
						<td>Nama Galeri</td>
						<td>Deskripsi Galeri</td>
						<td>Gambar</td>
						<td colspan="2">Action</td>
					  </tr>
				</thead>
				<tbody>
				@foreach ($galeri as $gbr)
					<tr>
						<td>{{$gbr->keterangan}}</td>
						<td><textarea name="" id="" cols="60" rows="5" style="background-color: transparent">{{$gbr->deskripsi}}</textarea></td>
						<td><img src="{{url('galeriweb/'.$gbr->foto)}}" alt="" style="width:150px;"></td>
						  <td >
								  <Button class="btn btn-primary" type="button" onclick="window.location.href='/galeriadmin/edits/{{$gbr->id_galeri}}'">
									  <i class="far fa-edit"></i> Edit                                                                   
								  </Button> 
								  <Button class="btn btn-danger" type="button" onclick="window.location.href='/galeriadmin/del/{{$gbr->id_galeri}}' ">
									  <i class="far fa-trash-alt"></i> Hapus
								  </Button>
						  </td>
					  </tr>
					@endforeach
				</tbody>
		  </table>
		  
		</div> <!-- /.portfolio-holder -->
	</div> <!-- /.row -->
	
</div> <!-- /.container -->
@endsection