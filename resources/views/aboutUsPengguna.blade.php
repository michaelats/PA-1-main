@extends('layout.user')

@section('title','Harian - Tentang Kami')

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

	<div class="container">	
		<div class="row">
			<div class="col-md-9 blog-posts">
				<div class="row">
					@foreach ($aboutus as $about)
					<div class="portfolio-post mix illustration" data-aos="zoom-in-down" data-aos-duration="1000">
						<div class="thumb-post col-md-6">
							<img src="{{url('imgAboutUs/'.$about->FotoAboutUs)}}" alt="" style="width: 400px">
						</div>
						<div class="thumb-post col-md-6">
							<h4><a>{{$about->Nama}}</a></h4>
							<p>{{$about->deskripsi}}</p>
							<a><p><i> Sumber :{{$about->sumber}}</i></p></a>
						</div>
					</div>
					@endforeach	
				</div>
			</div>
			<div class="col-md-3">
				<div class="sidebar">
					<div class="sidebar-widget">
							<h3 class="widget-title">Saran</h3>
						@foreach ($saran as $saran)
						<div class="card">
							<div class="card-body">
							  <blockquote class="blockquote mb-0">
								<p><a>{{$saran->daftar_saran}}</a></p>
								<footer class="blockquote-footer">{{$saran->pengirim}} || <?php
									$date=date_create($saran->tanggal);
									echo date_format($date,"d M Y");
									?></cite></footer>
							  </blockquote>
							</div>
						  </div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-form">
						<h3>Saran</h3>
						<div class="widget-inner">
						<form action="{{route('saran.store')}}" method="post" id="contact-form" enctype="multipart/form-data">
							{{ csrf_field() }}	
							<div class="row">
								<div class="col-md-4">
									<p>
										<label for="name">Nama :</label>
										<input type="text" name="pengirim" id="name" required>
									</p>
								</div>
								<div class="col-md-4">
									<p>
										<label for="email">Email :</label>
										 <input type="email" name="email" id="email" required>
									</p>
								</div>
								<div class="col-md-4">
									<p>
										<label for="subject">Subject :</label>
										 <input type="text" name="subjek" id="subject" required>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p>
										<label for="message">Saran :</label>
										<textarea name="daftar_saran" id="message" required></textarea>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button class="mainBtn" id="submit" type="submit">Kirim</button>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div id="result"></div>
								</div>
							</div>
						</form>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection