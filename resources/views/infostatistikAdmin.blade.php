@extends('layout.admin')

@section('title','Harian - Informasi Statistik')

@section('container')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orelega+One&display=swap');
    h3{
        font-family: 'Orelega One', cursive;
    }
</style>
<script>
    function tambahdata() {
        window.location.href = "/tambahdata";
    }
</script>
	<div class="first-widget parallax" id="statis">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Informasi Statistik</h2>
					</div> <!-- /.col-md-6 -->	
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Beranda - Informasi Statistik</span>
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
								<h1 class="section-title"> <a> Data Statistik Desa di Kecamatan Harian</a> </h1>
								<div class="blog-content">
									<div class="tbl-header">
                                        <form action="">
                                            <table class="table table-responsive table-hover table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <td><h3>Nama Desa</h3></td>
                                                        <td><h3>Kepala Desa</h3></td>
                                                        <td><h3>Pria</h3></td>
                                                        <td> <h3> Wanita</h3></td>
                                                        <td> <h3> Total</h3></td>
                                                        <td  colspan="2"><h3>Action</h3></td>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach ($informasi_statistik as $infostatistik)
                                                  <tr>
                                                      <td>{{$infostatistik->nama_tempat}}</td>
                                                      <td>{{$infostatistik->kepala_desa}} </td>
                                                      <td>{{$infostatistik->pria}}</td>
                                                      <td>{{$infostatistik->wanita}}</td>
                                                      <td><?php 
                                                          $jumlah = array($infostatistik->pria,$infostatistik->wanita);
                                                          $total = array_sum($jumlah);
                                                          echo $total;
                                                          ?> 
                                                        </td>
                                                        <td >
                                                                <Button class="btn btn-primary" type="button" onclick="window.location.href='infostatistikAdmin/edit/{{$infostatistik->id_info_statistik}}'">
                                                                    <i class="far fa-edit"></i> Edit                                                                   
                                                                </Button> 
                                                                <Button class="btn btn-danger" type="button" onclick="window.location.href='infostatistikAdmin/delete/{{$infostatistik->id_info_statistik}}'">
                                                                    <i class="far fa-trash-alt"></i> Hapus
                                                                </Button>
                                                        </td>
                                                    </tr>
                                                  @endforeach
                                                </tbody>
                                          </table>
                                          <button class="btn btn-info" onclick="tambahdata();" type="button"> <i class="far fa-plus-square"></i> Tambah Data</button>
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