@extends('layout.admin')

@section('title','Harian - Informasi Wisata Edit')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@section('container')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orelega+One&display=swap');
    h3{
        font-family: 'Orelega One', cursive;
    }
    ::-webkit-scrollbar {
		width: 5px;
	} 
	::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
	} 
	::-webkit-scrollbar-thumb {
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
	}
</style>
	<div class="first-widget parallax" id="blog">
		<div class="parallax-overlay">
			<div class="col-sm-12">	
				<br>
				<button class="btn btn-success" onclick="window.location.href='{{url('/infoWis')}}'"><i class="fas fa-arrow-circle-left"></i> Kembali</button>
			</div>
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Informasi Wisata</h2>
					</div> <!-- /.col-md-6 -->	
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Beranda - Informasi Wisata</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row">
			<div class="col-md-12 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header">
							<section>
								<div class="blog-content">
									<div class="tbl-header">
                                        <form action="">
                                            <table class="table table-responsive table-hover table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <td><h3>Nama Wisata</h3></td>
                                                        <td><h3>Deskripsi</h3></td>
                                                        <td><h3>Gambar</h3></td>
                                                        <td colspan="2"><h3>Action</h3></td>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($informasi_wisata as $infowisata)
                                                    <tr>
                                                        <td>{{$infowisata->nama_wisata}}</td>
                                                        <td><textarea name="" id="" cols="60" rows="10" style="background-color: transparent">{{$infowisata->daftar_informasi_wisata}}</textarea></td>
                                                        <td><img src="{{url('infowisata/'.$infowisata->gambar_tempat)}}" alt="" style="width:150px;"></td>
                                                          <td >
                                                                  <Button class="btn btn-primary" type="button" onclick="window.location.href='/editWis/edit/{{$infowisata->id_info_wisata}}'">
                                                                      <i class="far fa-edit"></i> Edit                                                                   
                                                                  </Button> 
                                                                  <Button class="btn btn-danger" type="button" onclick="window.location.href='/editWis/delete/{{$infowisata->id_info_wisata}}' ">
                                                                      <i class="far fa-trash-alt"></i> Hapus
                                                                  </Button>
                                                          </td>
                                                      </tr>
                                                    @endforeach
                                                </tbody>
                                          </table>
                                          <button class="btn btn-info" type="button" onclick="window.location.href='/tambahEdit'"> <i class="far fa-plus-square"></i> Tambah Data</button>
                                        </form>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.container -->	
@endsection