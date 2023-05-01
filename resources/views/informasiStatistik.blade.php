@extends('layout.main')
<style>
	h1{
	  font-size: 25px;
	  color: black;
	  text-transform: uppercase;
	  font-weight: 300;
	  text-align: center;
	  margin-bottom: 15px;
	}
	table{
	  width:100%;
	  table-layout: fixed;
	}
	.tbl-header{
	  background-color: rgba(255,255,255,0.3);
	 }
	.tbl-content{
	  height:400px;
	  overflow-x:auto;
	  margin-top: 0px;
	  border: 1px solid rgba(255,255,255,0.3);
	}
	@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap');
	th{
	  padding: 20px 15px;
	  text-align: left;
	  font-weight: 600;
	  font-size: 12px;
	  color: black;
	  text-transform: uppercase;
	  font-family: 'Nunito', sans-serif;
	}
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');
	td{
	  padding: 20px 20px;
	  text-align: left;
	  vertical-align:middle;
	  font-weight: 500;
	  font-size: 12px;
	  color: black;
	  border-bottom: solid 1px rgba(255,255,255,0.1);
	  font-family: 'Poppins', sans-serif;
	}
	
	/* demo styles */
	section{
	  margin: auto;
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
@section('title','Harian - Informasi Statistik')

@section('container')
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
			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header">
							<section>
								<h1 class="section-title"> <a> Data Statistik Desa di Kecamatan Harian</a> </h1>
								<div class="blog-content">
									<div class="tbl-header">
										<table cellpadding="0" cellspacing="0" border="0" >
											<thead>
										  	<tr>
												<th>Nama Desa</th>
												<th>Kepala Desa</th>
												<th>Pria</th>
												<th>Wanita</th>
												<th>Total</th>
										  	</tr>
											</thead>
									  </table>
									</div>
									<div class="tbl-content">
										<table cellpadding="0" cellspacing="0" border="0">
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
										  		</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<h5 class="widget-title">Postingan Terbaru</h5>
						@foreach ($informasi_wisata as $infowisata)
						<div class="last-post clearfix">
							
							<div class="thumb pull-left">
								<a href="/lihat/{{$infowisata->id_info_wisata}}"><img src="{{url('infowisata/'.$infowisata->gambar_tempat)}}" alt="" style="width:100px"></a>
							</div>
							<div class="content">
								<span><?php
									$date=date_create($infowisata->tanggal);
									echo date_format($date,"d M Y");
									?></span>
								<h4><a href="/lihat/{{$infowisata->id_info_wisata}}">{{$infowisata->nama_wisata}}</a></h4>
							</div>
						</div> <!-- /.last-post -->
						@endforeach
					</div> <!-- /.sidebar-widget -->
				</div> <!-- /.sidebar -->
			</div> <!-- /.col-md-4 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->	
@endsection