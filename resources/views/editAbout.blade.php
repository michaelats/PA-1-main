@extends('layout.admin')
@section('title','Harian - Edit Data')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@section('container')
	<div class="container">	
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-form">
						<div class="widget-inner">
						<form action="{{route('AboutEdit.edit',$editAbout->id_aboutUs)}}" method="post" id="contact-form" enctype="multipart/form-data">	
                            {{ csrf_field() }}
							<div class="row my-4">
								<div class="col-md-4">
									<p>
										<label for="Nama">Nama Subjek:</label>
										<input type="text" name="Nama" id="name" value="{{$editAbout->Nama}}" required>
									</p>
								</div>
                                <div class="col-md-4">
									<p>
										<label for="sumber">Sumber :</label>
										<input type="text" name="sumber" id="name" value="{{$editAbout->sumber}}" required>
									</p>
								</div>
                                <div class="col-md-4">
									<p>
										<label for="foto">Gambar :</label>
										<input id="formFileMultiple"  name="FotoAboutUs" type="file" id="formFileMultiple" multiple style="width: 100%"> {{$editAbout->FotoAboutUs}}
									</p>
								</div>
							</div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="deskripsi">Deskripsi Subjek :</label>
                                    <textarea name="deskripsi" id="" cols="30" rows="10" required>{{$editAbout->deskripsi}}</textarea>
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