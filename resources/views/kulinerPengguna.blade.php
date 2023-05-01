@extends('layout.user')

@section('title','Harian - Informasi Kuliner')

@section('container')

	<div class="first-widget parallax" id="blog">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Informasi Kuliner</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Beranda - Informasi Kuliner</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container" >	
		<div class="row">
			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						@foreach ($kuliner as $kuliners)
						<div class="post-blog" data-aos="flip-up">
							<div class="blog-image">
								<a>
									<img src="{{url('kuliner/'.$kuliners->gambar_kuliner)}}" alt="" style="width:550px">
								</a>
							</div> <!-- /.blog-image -->
							<div class="blog-content">
								<span class="meta-date"><a><?php
									$date=date_create($kuliners->created_at);
									echo date_format($date,"d M Y");
									?></a></span>
								<span class="meta-comments"><a>Informasi Kuliner</a></span>
								<span class="meta-author"><a>Harian</a></span>
								<h3><a>{{$kuliners->nama_kuliner}}</a></h3>
								<p style="text-align: justify;">{{$kuliners->deskripsi_kuliner}} 
								</p>
								<p> <i>Sumber Referensi : <a href="{{$kuliners->sumber}}">{{$kuliners->sumber}}</a> </i></p>
							</div> <!-- /.blog-content -->
						</div> <!-- /.post-blog -->
						@endforeach
					</div> <!-- /.col-md-12 -->
					
				</div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<h5 class="widget-title">Postingan</h5>
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