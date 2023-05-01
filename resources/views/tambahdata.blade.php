@extends('layout.admin')

@section('title','Harian - Tambah')

@section('container')
	<div class="container">	
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-form">
						<div class="widget-inner">
						<form action="{{route('infostatistikAdmin.plus')}}" method="post" id="contact-form" enctype="multipart/form-data">	
                            {{ csrf_field() }}
							<div class="row">
								<div class="col-md-6">
									<p>
										<label for="nama_tempat">Nama Desa :</label>
										<input type="text" name="nama_tempat" id="name" value="">
									</p>
								</div>
								<div class="col-md-6">
									<p>
										<label for="kepala_desa">Kepala Desa :</label>
										 <input type="text" name="kepala_desa" id="name" value="">
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>
										<label for="pria">Jumlah Pria :</label>
										<input type="number" name="pria" id="name" min="0" value="">
									</p>
								</div>
								<div class="col-md-6">
									<p>
										<label for="wanita">Jumlah Wanita :</label>
										 <input type="number" name="wanita" id="name" min="0" value="">
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button class="mainBtn" id="submit" type="submit"><i class="far fa-edit"></i> Tambah </button>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div id="result"></div>
								</div> <!-- /.col-md-12 -->
							</div> <!-- /.row -->
						</form>
					  </div> <!-- /.widget-inner -->
					</div> <!-- /.contact-form -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.col-md-8 -->
	</div> <!-- /.container -->	
@endsection