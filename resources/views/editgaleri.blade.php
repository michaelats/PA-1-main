@extends('layout.admin')
@section('title','Harian - Edit Galeri')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@section('container')
	<div class="container">	
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-form">
						<div class="widget-inner">
						<form action="{{route('galeriadmin.update',$editgaleri->id_galeri)}}" method="post" id="contact-form" enctype="multipart/form-data">	
                            {{ csrf_field() }}
							<div class="row my-4">
								<div class="col-md-6">
									<p>
										<label for="keterangan">Nama Galeri:</label>
										<input type="text" name="keterangan" id="name" value="{{$editgaleri->keterangan}}" required>
									</p>
								</div>
                                <div class="col-md-6">
									<p>
										<label for="foto">Gambar :</label>
										<input id="formFileMultiple" name="foto" type="file" id="formFileMultiple"  style="width: 100%" multiple value="{{$editgaleri->foto}}"> {{$editgaleri->foto}}
									</p>
								</div>
							</div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="deskripsi">Deskripsi Galeri</label>
                                    <textarea name="deskripsi" id="" cols="30" rows="10" required>{{$editgaleri->deskripsi}}</textarea>
                                </div>
                            </div>s
                            
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