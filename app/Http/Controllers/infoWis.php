<?php

namespace App\Http\Controllers;
use App\Models\infowisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class infoWis extends Controller
{
    public function infoWisata(){
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->paginate(10);
        $galeri = DB::table('galeri')->get();
        return view('infowisataAdmin',['informasi_wisata' => $informasi_wisata],['galeri' => $galeri]);
    }

    public function selengkap($id_info_wisata){
        $edits = infowisata::find($id_info_wisata);
        return view('selengkapAdmin',compact('edits'));
    }

    public function addInfo(){
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        $galeri = DB::table('galeri')->get();
        return view('infoEdit',['informasi_wisata' => $informasi_wisata],['galeri' => $galeri]);
    }
    public function tampil(){
        return view('tambahEdit');
    }
    public function add(Request $request){
        $tambah = new infowisata();
        $tambah->daftar_informasi_wisata = $request->daftar_informasi_wisata;
        $tambah->nama_wisata = $request->nama_wisata;

        if ($request->hasFile('gambar_tempat')){
            $file= $request->file('gambar_tempat')->getClientOriginalName();
            $request->file('gambar_tempat')->move('infowisata',$file);
            $tambah->gambar_tempat = $file;
        } 
        $tambah -> save();
        return redirect('/editWis');
        
    }

    public function edit($daftar_informasi_wisata){
        $edits = infowisata::find($daftar_informasi_wisata);
        return view('editWisata',compact('edits'));
    }

    public function update(Request $request, $daftar_informasi_wisata){
        $update = infowisata::find($daftar_informasi_wisata);
        $file = $update->gambar_tempat;
        if ($request->hasFile('gambar_tempat')){
            $file= $request->file('gambar_tempat')->getClientOriginalName();
            $request->file('gambar_tempat')->move('infowisata',$file);
            $update->gambar_tempat = $file;
        } 
        $update->daftar_informasi_wisata= $request->daftar_informasi_wisata;
        $update->gambar_tempat = $file;
        $update->nama_wisata = $request->nama_wisata;
        $update -> save();
       
        return redirect('/editWis');         

    }
    public function delete($daftar_informasi_wisata){
        $del = infowisata::find($daftar_informasi_wisata);
        if( $del->delete()){
           return redirect()->back();
        }
  
    }
}
