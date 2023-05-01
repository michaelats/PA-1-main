@extends('layout.admin')
@section('title','Harian - Tambah Data')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@section('container')
	<div class="container">	
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-form">
						<div class="widget-inner">
						<form action="{{route('Budaya.tambah')}}" method="post" id="contact-form" enctype="multipart/form-data">	
                            {{ csrf_field() }}
							<div class="row my-4">
								<div class="col-md-4">
									<p>
										<label for="nama_budaya">Nama Budaya :</label>
										<input type="text" name="nama_budaya" id="name" value="" required>
									</p>
								</div>
								<div class="col-md-4">
									<p>
										<label for="sumber">Sumber Referensi :</label>
										<input type="text" name="sumber" id="name" value="" required>
									</p>
								</div>
                                <div class="col-md-4">
									<p>
										<label for="gambar_budaya">Gambar Budaya :</label>
										<input id="formFileMultiple" required="required"  name="gambar_budaya" type="file" id="formFileMultiple" multiple style="width: 100%">
									</p>
								</div>
							</div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="deskripsi_budaya">Deskripsi Budaya :</label>
                                    <textarea name="deskripsi_budaya" id="" cols="30" rows="10" required></textarea>
                                </div>
                            </div>
                            
                            <div class="row">
                                    <div class="col-md-12">
                                       <center> <br><button class="mainBtn" id="submit" type="submit"><i class="far fa-edit"> </i> Tambah </button></center>
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