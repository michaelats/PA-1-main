@extends('layout.main')

@section('title','Harian - Tanya Jawab')

@section('container')
	<div class="first-widget parallax" id="tanyajawab">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Tanya Jawab</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Beranda - Tanya Jawab</span>
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
						<div class="archive-wrapper">
							<p class="light-text">Halaman ini di dedikasikan untuk forum Tanya Jawab pada Pengguna yang sudah terdaftar. <br>Anda dapat <a href="{{url('/login')}}">login</a> terlebih dahulu.</p>
							<h3 class="archive-title">PERTANYAAN</h3>
							@foreach ($pertanyaan as $tanya)
							<div class="archive-list"  data-aos="fade-up">
								<div>
									<h3 class="archive-title"> <a>{{$tanya->daftar_pertanyaan}}</a></h3>
									<p> <?php
										$date=date_create($tanya->created_at);
										echo date_format($date,"d M Y");
										?>| {{$tanya->pengirim}}</p>
								</div>
								<div class="post-blog">
									<p><a>Jawaban :</a></p>
									<div style="margin: 30px">{{$tanya->jawaban}}</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- /.col-md-12 -->
					{{$pertanyaan->links()}}
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