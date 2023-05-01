@extends('layout.admin')

@section('title','Harian - Home')

@section('container')
<style>
#homeIntro { 
  background-image: url("../img/jumbotron.JPG"); 
  }
	.thumb-post{
		padding-bottom : 40px;

	}
</style>
	<section id="homeIntro" class="parallax first-widget">
	    <div class="parallax-overlay"  data-aos="fade-down-right">
		    <div class="container home-intro-content">
		        <div class="row">
		        	<div class="col-md-12">
		        		<h2 data-aos="fade-down"
						data-aos-easing="linear"
						data-aos-duration="1500">Website Informasi Wisata Kecamatan Harian </h2>
		        		<p data-aos="fade-up"
						data-aos-duration="3000">Horas! Selamat datang di website informasi wisata Kecamatan Harian <br> Kabupaten Samosir, Provinsi Sumatera Utara.</p>
		        	</div> <!-- /.col-md-12 -->
		        </div> <!-- /.row -->
		    </div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#homeIntro -->

	<section class="light-content services">
		<div class="container" data-aos="fade-right"
		data-aos-offset="300"
		data-aos-easing="ease-in-sine">
			<div class="row">
				<div class="justify-content-center">
					<div class="section-header">
							<h1 class="section-title text-center">Kecamatan Harian</h1>
							<p class="section-desc" style="text-align: justify;"> Harian adalah sebuah kecamatan di Kabupaten Samosir, Sumatera Utara, Indonesia. Ibukota kecamatan ini benar di desa Turpuk Sihotang. Kecamatan Harian sendiri memiliki 13 Desa yaitu : Dolok Raja, Hariara Pintu, Hariara Pohan, Huta Galung, Janji Martahan, Partungko Naginjang, Sampur Toba, Siparmahan, Sosor Dolok, Turpuk Limbong, Turpuk Malau, Turpuk Sagala, Turpuk Sihotang. </p>
					</div>
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.services -->

	<section class="dark-content portfolio" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="section-title">Sekilas Tentang Tempat Wisata di Kecamatan Harian</h2>
						<p class="section-desc">Beberapa foto tempat wisata Kecamatan Harian</p>
					</div> <!-- /.section-header -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
		
		<div id="portfolio-carousel" class="portfolio-carousel portfolio-holder">
			@foreach ($informasi as $info_wis)
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">{{$info_wis->nama_wisata }}</span>
								<h3 class="portfolio-title"><a href="/lengkapPengguna/{{$info_wis->id_info_wisata}}">{{$info_wis->nama_wisata }}</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="{{url('infowisata/'.$info_wis->gambar_tempat)}}" title="{{$info_wis->nama_wisata }}">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="{{url('infowisata/'.$info_wis->gambar_tempat)}}" alt="">
				</div>
			</div> <!-- /.item -->	
			@endforeach
		</div> <!-- /#owl-demo -->
	</section> <!-- /.portfolio-holder -->

	<section class="testimonials-widget">
		<div class="container" data-aos="fade-up"
		data-aos-anchor-placement="bottom-bottom">
			<div class="row">
				<div class="col-md-12">
					<div class="bxslider">
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">Ibukota Kecamatan</span>
								<p class="testimonial-description">Ibukota untuk Kecamatan Harian adalah Desa Turpuk Sihotang</p>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">Letak Geografis</span>
								<p class="testimonial-description">2°30' - 2°45 LU dan 98°30' - 98°49' BT </p>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">Luas Wilayah</span>
								<p class="testimonial-description"> Luas wilayah kecamatan ini sekitar 560.45 KM <sup>2<sup></p>
							</div>
						</div>
					</div> <!-- /.bxslider -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.testimonials-widget -->

	<section class="light-content our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="section-title">Peta Kecamatan Harian</h2>
					</div> <!-- /.section-header -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
		<div class="team-members">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="team-member">
							<div class="thumb-post">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127553.34799531437!2d98.50492885806825!3d2.4930016396291417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031d6a1b51a91d5%3A0x8a0fadb513abbb9b!2sHarian%2C%20Kabupaten%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1618596170600!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
								<span class="member-role">Kec.Harian</span>
							</div>
						</div> <!-- /.team-member -->
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.team-members -->
	</section> <!-- /.our-team -->
@endsection
