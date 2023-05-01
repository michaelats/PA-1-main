@extends('layout.admin')

@section('title','Harian - Tanya Jawab Admin')

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
					<div class="col-md-12">
						<div class="archive-wrapper">							
							<h3 class="archive-title">PERTANYAAN</h3>
							@foreach ($pertanyaan as $tanya)
							<div class="archive-list" data-aos="fade-up">
								<h3 class="archive-title"> <a>{{$tanya->daftar_pertanyaan}}</a></h3>
								<p> <?php
									$date=date_create($tanya->created_at);
									echo date_format($date,"d M Y");
									?>| {{$tanya->pengirim}}</p>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p>{{$tanya->jawaban}}</p>
									<button type="button" class="btn btn-success" onclick="window.location.href='tanyaAdmin/balas/{{$tanya->id_pertanyaan}}'">Reply</button> <br><br>
								</div>
								</div>
							@endforeach
						</div>
						<div class="pull-left">
							{{$pertanyaan->links()}}
							<p>
								Showing 
								 {{$pertanyaan->firstItem()}}
								to
								{{$pertanyaan->lastItem()}}
								of
								{{$pertanyaan->total()}} results
							</p>
						</div>
					</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->	
@endsection