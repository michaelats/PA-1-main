@extends('layout.admin')

@section('title','Harian - Informasi Wisata')
@section('container')

	<div class="first-widget parallax" id="blog">
		<div class="parallax-overlay">
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
						<div class="post-blog">
							<div class="blog-content">
                                <h3><a>{{$edits->nama_wisata}}</a></h3>
								<span class="meta-date"><a><?php
									$date=date_create($edits->tanggal);
									echo date_format($date,"d M Y");
									?></a></span>
								<span class="meta-comments"><a>Informasi Wisata</a></span>
								<span class="meta-author"><a>Harian</a></span>
                                <br><br>
                                <div class="blog-image">
                                    <a>
                                        <img src="{{url('infowisata/'.$edits->gambar_tempat)}}" alt="">
                                    </a>
                                </div> <!-- /.blog-image -->
								<p style="text-align: justify;">{{$edits->daftar_informasi_wisata}}</p>
							</div> <!-- /.blog-content -->
						</div> <!-- /.post-blog -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

		</div> <!-- /.row -->
	</div> <!-- /.container -->	
@endsection