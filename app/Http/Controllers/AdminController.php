<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\infostatistik;
use App\Models\kuliner_wis;
use App\Models\budaya_wis;
use App\Models\aboutUs;
use App\Models\galeri;
use App\Models\saran;
use Illuminate\Http\Request;

class AdminController extends Controller
{   
    public function index(){
        $informasi = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('indexadmin',['informasi' => $informasi]);
    }

    public function tentang(){
        $aboutUs = DB::table('aboutus')->get();
        $saran = saran::inRandomOrder()->limit(3)->get();
        return view('aboutUsAdmin',['aboutus' => $aboutUs],['saran' => $saran]);
    }

    public function tambahAbout(){
        return view('tambahAbout');
    }

    
    public function tentangKami(Request $request){
        $tambahtentangKami = new aboutUs();
        $tambahtentangKami->Nama= $request->Nama;
        $tambahtentangKami->sumber = $request->sumber;
        $tambahtentangKami->deskripsi = $request->deskripsi;
        if ($request->hasFile('FotoAboutUs')){
            $file= $request->file('FotoAboutUs')->getClientOriginalName();
            $request->file('FotoAboutUs')->move('imgAboutUs',$file);
            $tambahtentangKami->FotoAboutUs = $file;
        } 
        $tambahtentangKami -> save();
        return redirect('/aboutadmin');
        
    }

    public function editAbout($id_aboutUs){
        $editAbout = aboutUs::find($id_aboutUs);
        return view('editAbout',compact('editAbout'));
    }

    public function updateEdit(Request $request, $id_aboutUs){
        $edit = aboutUs::find($id_aboutUs);
        $edit->Nama= $request->Nama;
        $edit->sumber = $request->sumber;
        $file = $edit->FotoAboutUs;
        if ($request->hasFile('FotoAboutUs')){
            $file= $request->file('FotoAboutUs')->getClientOriginalName();
            $request->file('FotoAboutUs')->move('imgAboutUs',$file);
            $edit->FotoAboutUs = $file;
        } 
        $edit->deskripsi= $request->deskripsi;
        $edit->FotoAboutUs = $file;
        $edit -> save();
       
        return redirect('/aboutadmin');         
    }

    public function deleteAbout($id_aboutUs){
        $delete = aboutUs::find($id_aboutUs);
        if( $delete->delete()){
           return redirect()->back();
        }
    }
    
    public function galeri(){
        $galeri = DB::table('galeri')->orderBy('created_at','DESC')->paginate(10);
        return view('galeriadmin',['galeri' => $galeri]);
    }
    public function tambahGaleri(){
        return vieW('tambahGaleri');
    }

    public function edits($id_galeri){
        $editgaleri = galeri::find($id_galeri);
        return view('editgaleri',compact('editgaleri'));
    }

    public function updates(Request $request, $id_galeri){
        $updates = galeri::find($id_galeri);
        $file = $updates->foto;
        if ($request->hasFile('foto')){
            $file= $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('galeriweb',$file);
            $updates->foto = $file;
        } 
        $updates->deskripsi= $request->deskripsi;
        $updates->foto = $file;
        $updates->keterangan = $request->keterangan;
        $updates -> save();
       
        return redirect('/galeriadmin');         
    }

    public function add(Request $request){
        $tambah = new galeri();
        $tambah->keterangan = $request->keterangan;
        $tambah->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')){
            $file= $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('galeriweb',$file);
            $tambah->foto = $file;
        } 
        $tambah -> save();
        return redirect('/galeriadmin');
        
    }
    public function del($id_galeri){
        $delete = galeri::find($id_galeri);
        if( $delete->delete()){
           return redirect()->back();
        }
    }

    public function infostatistikAdmin(){
        $informasi_statistik = DB::table('informasi_statistik')->get();
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('infostatistikAdmin',['informasi_statistik'=> $informasi_statistik],['informasi_wisata' => $informasi_wisata]);
    }
    public function edit($id_info_statistik){
        $edits = infostatistik::find($id_info_statistik);
        return view('editStatistik',compact('edits'));
    }

    public function update(Request $request, $id_info_statistik){
        $update = infostatistik::find($id_info_statistik);
        
        $update->nama_tempat= $request->nama_tempat;
        $update->kepala_desa = $request->kepala_desa;
        $update->pria = $request->pria;
        $update->wanita = $request->wanita;
        $update -> save();
       
        return redirect('infostatistikAdmin');         

    }

    public function tambah(){
        return view('tambahdata');
    }

    public function plus(Request $request){
        $tambah = new infostatistik();
        $tambah->nama_tempat= $request->nama_tempat;
        $tambah->kepala_desa = $request->kepala_desa;
        $tambah->pria = $request->pria;
        $tambah->wanita = $request->wanita;

        $tambah -> save();
        return redirect('infostatistikAdmin');
        
    }
    public function delete($id_info_statistik){
        $del = infostatistik::find($id_info_statistik);
        if( $del->delete()){
           return redirect()->back();
        }
  
    }

    public function selengkap($id_info_wisata){
        $edits = infowisata::find($id_info_wisata);
        return view('selengkapPengguna',compact('edits'));
    }

    public function kulAdmin(){
        $kuliner = DB::table('kuliner')->orderBy('created_at','DESC')->get();
        return view('kulinerAdmin',['kuliner' => $kuliner]);
    }

    public function tambahkul(){
        return view('tambahKuliner');
    }

    public function tambahKuliner(Request $request){
        $tambahKul = new kuliner_wis();
        $tambahKul->nama_kuliner= $request->nama_kuliner;
        $tambahKul->sumber= $request->sumber;
        $tambahKul->deskripsi_kuliner = $request->deskripsi_kuliner;
        if ($request->hasFile('gambar_kuliner')){
            $file= $request->file('gambar_kuliner')->getClientOriginalName();
            $request->file('gambar_kuliner')->move('kuliner',$file);
            $tambahKul->gambar_kuliner = $file;
        } 
        $tambahKul-> save();
        return redirect('/kulinerAdmin');
    }

    public function editKul($id_kuliner){
        $editkuliner = kuliner_wis::find($id_kuliner);
        return view('editKuliner',compact('editkuliner'));
    }

    public function updateKul(Request $request ,$id_kuliner){
        $tambahKul = kuliner_wis::find($id_kuliner);
        $tambahKul->nama_kuliner= $request->nama_kuliner;
        $tambahKul->deskripsi_kuliner = $request->deskripsi_kuliner;
        $tambahKul->sumber= $request->sumber;
        if ($request->hasFile('gambar_kuliner')){
            $file= $request->file('gambar_kuliner')->getClientOriginalName();
            $request->file('gambar_kuliner')->move('kuliner',$file);
            $tambahKul->gambar_kuliner = $file;
        } 
        $tambahKul-> save();
        return redirect('/kulinerAdmin');
    }

    public function deleteKuliner($id_kuliner){
        $del = kuliner_wis::find($id_kuliner);
        if( $del->delete()){
           return redirect()->back();
        }
  
    }

    public function budaya(){
        $budaya = DB::table('budaya')->orderBy('created_at','DESC')->get();
        return view('budayaAdmin',['budaya' => $budaya]);
    }

    public function Tambahbudaya(){
        return view('tambahbudaya');
    }

    public function tambahdatabudaya(Request $request){
        $tambahBudaya = new budaya_wis();
        $tambahBudaya->nama_budaya= $request->nama_budaya;
        $tambahBudaya->deskripsi_budaya = $request->deskripsi_budaya;
        $tambahBudaya->sumber = $request->sumber;
        if ($request->hasFile('gambar_budaya')){
            $file= $request->file('gambar_budaya')->getClientOriginalName();
            $request->file('gambar_budaya')->move('budaya',$file);
            $tambahBudaya->gambar_budaya = $file;
        } 
        $tambahBudaya-> save();
        return redirect('/budayaAdmin');
    }

    public function editBud($id_budaya){
        $editbudaya = budaya_wis::find($id_budaya);
        return view('editBudaya',compact('editbudaya'));
    }

    public function updateBud(Request $request ,$id_budaya){
        $editBudaya = budaya_wis::find($id_budaya);
        $editBudaya->nama_budaya= $request->nama_budaya;
        $editBudaya->deskripsi_budaya = $request->deskripsi_budaya;
        $editBudaya->sumber = $request->sumber;
        if ($request->hasFile('gambar_budaya')){
            $file= $request->file('gambar_budaya')->getClientOriginalName();
            $request->file('gambar_budaya')->move('budaya',$file);
            $editBudaya->gambar_budaya = $file;
        } 
        $editBudaya-> save();
        return redirect('/budayaAdmin');
    }

    public function deleteBudaya($id_budaya){
        $del = budaya_wis::find($id_budaya);
        if( $del->delete()){
           return redirect()->back();
        }
  
    }
    
}
