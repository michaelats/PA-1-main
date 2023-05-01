@extends('layout.user')

@section('title','Harian - Galeri')

@section('container')
<div class="first-widget parallax" id="portfolio" >
	<div class="parallax-overlay">
		<div class="container pageTitle">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h2 class="page-title" data-aos="fade-up"
					data-aos-anchor-placement="top-bottom"  data-aos-duration="1500">Galeri Kami</h2>
				</div> <!-- /.col-md-6 -->
				<div class="col-md-6 col-sm-6 text-right">
					<span class="page-location">Beranda - Galeri</span>
				</div> <!-- /.col-md-6 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
	<div class="row">
		<div class="portfolio-holder" id="Grid" data-aos="fade-up" data-aos-duration="3000">
			@foreach ($galeri as $gbr)
			<div class="portfolio-post col-sm-6 col-md-4 mix illustration">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<h3 class="portfolio-title"><a>{{$gbr->keterangan}}</a></h3>
								<span class="meta-category">{{$gbr->deskripsi}}</span>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="{{url('galeriweb/'.$gbr->foto)}}" title="{{$gbr->keterangan}}">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="{{asset('galeriweb/'.$gbr->foto)}}" alt="{{$gbr->keterangan}}">
				</div>
			</div> <!-- /.col-md-4 -->	
			@endforeach
		</div> <!-- /.portfolio-holder -->
		<div class="pull-left">
			{{$galeri->links()}}
		</div>
	</div> <!-- /.row -->
</div> <!-- /.container -->
@endsection