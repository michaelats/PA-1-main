@extends('layout.admin')

@section('title','Harian - Informasi Budaya')
<style>
	@import url('https://fonts.googleapis.com/css2?family=Orelega+One&display=swap');
	.th{
		font-family: 'Orelega One', cursive;
	}
</style>
@section('container')

	<div class="first-widget parallax" id="blog">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Informasi Budaya</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Beranda - Informasi Budaya</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container" >	
		<div class="row">
            <section>
                <h1 class="section-title section-header"> <a> Data Budaya di Kecamatan Harian</a> </h1>
                <div class="blog-content">
                    <div class="tbl-header">
                        <table class="table table-responsive table-hover table-bordered text-center">
                            <thead class="th">
                                <tr>
                                    <td>Nama Budaya</td>
                                    <td>Deskripsi Budaya</td>
                                    <td>Sumber Referensi</td>
                                    <td>Gambar Budaya</td>
                                    <td colspan="2">Action</td>
                                  </tr>
                            </thead>
                            <tbody>
                            @foreach ($budaya as $gbr)
                                <tr>
                                    <td>{{$gbr->nama_budaya}}</td>
                                    <td><textarea name="" id="" cols="60" rows="5" style="background-color: transparent">{{$gbr->deskripsi_budaya}}</textarea></td>
                                    <td>{{$gbr->sumber}}</td>
                                    <td><img src="{{url('budaya/'.$gbr->gambar_budaya)}}" alt="" style="width:150px;"></td>
                                      <td >
                                              <Button class="btn btn-primary" type="button" onclick="window.location.href='/budayaAdmin/edit/{{$gbr->id_budaya}}'">
                                                  <i class="far fa-edit"></i> Edit                                                                   
                                              </Button> 
                                              <Button class="btn btn-danger" type="button" onclick="window.location.href='/budayaAdmin/delete/{{$gbr->id_budaya}}' ">
                                                  <i class="far fa-trash-alt"></i> Hapus
                                              </Button>
                                      </td>
                                  </tr>
                                @endforeach
                            </tbody>
                      </table>
                    </div>
                    <center><button  class="btn btn-info" type="button" onclick="window.location.href='/tambahbudaya'"> <i class="far fa-plus-square"></i> Tambah Data</button> <br><br></center>
                </div>
            </section>
		</div> <!-- /.row -->
	</div> <!-- /.container -->	
@endsection