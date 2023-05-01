@extends('layout.admin')

@section('title','Harian - Informasi Wisata Admin')

@section('container')

	<div class="first-widget parallax" id="blog">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Informasi Wisata</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Beranda - Informasi Wisata Admin</span>
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
						@foreach ($informasi_wisata as $infowisata)
						<div class="post-blog" data-aos="flip-up">
							<div class="blog-image">
								<a>
									<img src="{{url('infowisata/'.$infowisata->gambar_tempat)}}" alt="">
								</a>
							</div> <!-- /.blog-image -->
							<div class="blog-content">
								<span class="meta-date"><a><?php
									$date=date_create($infowisata->tanggal);
									echo date_format($date,"d M Y");
									?></a></span>
								<span class="meta-comments"><a>Informasi Wisata</a></span>
								<span class="meta-author"><a>Harian</a></span>
								<h3><a>{{$infowisata->nama_wisata}}</a></h3>
								<?php echo substr(strip_tags(str_replace(PHP_EOL, '<br>', $infowisata->daftar_informasi_wisata), '<br>'), 0, 350);?> <a href="/lengkapAdmin/{{$infowisata ->id_info_wisata}}"> Lihat selengkapnya...</a></p>
							</div> <!-- /.blog-content -->
						</div> <!-- /.post-blog -->
						@endforeach
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<button class="btn btn-success" onclick="window.location.href='{{url('/editWis')}}'"><i class="fas fa-plus-square"> Tambah Informasi </i></button>
					</div>
					<div class="sidebar-widget">
						<h5 class="widget-title">Postingan Terbaru</h5>
						@foreach ($informasi_wisata as $infowisata)
						<div class="last-post clearfix">
							
							<div class="thumb pull-left">
								<a href="/lengkapAdmin/{{$infowisata ->id_info_wisata}}"><img src="{{url('infowisata/'.$infowisata->gambar_tempat)}}" alt="" style="width:100px"></a>
							</div>
							<div class="content">
								<span><?php
									$date=date_create($infowisata->tanggal);
									echo date_format($date,"d M Y");
									?></span>
								<h4><a href="/lengkapAdmin/{{$infowisata ->id_info_wisata}}">{{$infowisata->nama_wisata}}</a></h4>
							</div>
						</div> <!-- /.last-post -->
						@endforeach
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Galeri</h5>
						@foreach ($galeri as $gbr)
						<div class="coloumn">
							<div class="portfolio-post col-sm-6 col-md-4 mix illustration">
								<div class="thumb-post">
									<div class="overlay">
										<div class="">
											<div class="portfolio-expand" style="width: 20px;height:20px">
												<a class="fancybox" href="{{url('galeriweb/'.$gbr->foto)}}" title="{{$gbr->keterangan}}">
													<i class="fas fa-expand"></i>
												</a>
											</div>
										</div>
									</div>
									<img src="{{url('galeriweb/'.$gbr->foto)}}" alt="{{$gbr->keterangan}}">
								</div>
							</div>
						</div>
						@endforeach
					</div> <!-- /.sidebar-widget -->
				</div> <!-- /.sidebar -->
			</div> <!-- /.col-md-4 -->

		</div> <!-- /.row -->
	</div> <!-- /.container -->	
@endsection