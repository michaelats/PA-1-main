@extends('layout.admin')

@section('title','Harian - Balas Komentar')

@section('container')
	<div class="container">	
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-form">
						<div class="widget-inner">
						<form action="{{route('tanyaAdmin.reply',$balasKomen->id_pertanyaan)}}" method="post" id="contact-form" enctype="multipart/form-data">	
                            {{ csrf_field() }}
							<div class="sidebar">
								<div class="row my-4">
									<div class="col-md-6">
										<h2><a>{{$balasKomen->daftar_pertanyaan}}</a></h2>
										<h5> Oleh :{{$balasKomen->pengirim}}</h5>
									</div>
								</div>
	
								<div class="row">
									<div class="col-md-12">
										<label for="jawaban">Jawab :</label>
										<textarea name="jawaban" id="jawaban" cols="30" rows="10" required>{{$balasKomen->jawaban}}</textarea>
										<input type="hidden" name="daftar_pertanyaan" id="" value="{{$balasKomen->daftar_pertanyaan}}">
										<input type="hidden" name="pengirim" id="" value="{{$balasKomen->pengirim}}">
									</div>
								</div>
								
								<div class="row">
										<div class="col-md-12">
										   <center> <br><button class="mainBtn" id="submit" type="submit"><i class="far fa-edit"> </i> Balas </button></center>
										</div>
								</div>
							</div>
						</form>
					  </div> <!-- /.widget-inner -->
					</div> <!-- /.contact-form -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.col-md-8 -->
	</div> <!-- /.container -->	
@endsection