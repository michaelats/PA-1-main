@extends('layout.admin')

@section('title','Harian - komentar')

@section('container')
	<div class="container">	
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-form">
						<div class="widget-inner">
						<form action="{{route('bertanya.add')}}" method="post" id="contact-form" enctype="multipart/form-data">	
                            {{ csrf_field() }}
							<div class="row">
								<div class="col-md-6">
									<p>
										<label for="nama_tempat">Nama Pengirim</label>
										<input type="text" name="pengirim" id="name" value="{{ Auth::user()->name }}">
										<input type="hidden" name="jawaban" id="">
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p>
										<label for="wanita">Pertanyaan</label>
										 <textarea name="daftar_pertanyaan" id="" cols="30" rows="10"></textarea>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<center><button class="mainBtn" id="submit" type="submit"><i class="far fa-edit"></i> Kirim </button></center>
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