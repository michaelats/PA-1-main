@extends('layout.admin')
@section('title','Harian - Tambah Wisata')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@section('container')
	<div class="container">	
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-form">
						<div class="widget-inner">
						<form action="{{route('editWis.update',$edits->id_info_wisata)}}" method="post" id="contact-form" enctype="multipart/form-data">	
                            {{ csrf_field() }}
							<div class="row my-4">
								<div class="col-md-6">
									<p>
										<label for="nama_wisata">Nama Wisata:</label>
										<input type="text" name="nama_wisata" id="name" value="{{$edits->nama_wisata}}" required>
									</p>
								</div>
                                <div class="col-md-6">
									<p>
										<label for="gambar_tempat">Gambar :</label>
										<input id="formFileMultiple" name="gambar_tempat" type="file" id="formFileMultiple"  style="width: 100%" multiple value="{{$edits->gambar_tempat}}"> {{$edits->gambar_tempat}}
									</p>
								</div>
							</div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="daftar_informasi_wisata">Deskripsi</label>
                                    <textarea name="daftar_informasi_wisata" id="" cols="30" rows="10" required>{{$edits->daftar_informasi_wisata}}</textarea>
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