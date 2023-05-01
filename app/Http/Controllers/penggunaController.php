<?php

namespace App\Http\Controllers;
use App\Models\infowisata;
use App\Models\tanyajawab;
use App\Models\galeri;
use App\Models\saran;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class penggunaController extends Controller
{      
    public function index(){
        $informasi = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('indexPengguna',['informasi' => $informasi]);
    }

    public function selengkap($id_info_wisata){
        $edits = infowisata::find($id_info_wisata);
        return view('selengkapPengguna',compact('edits'));
    }

    public function galeri(){
        $galeri = DB::table('galeri')->paginate(15);
        return view('galeriPengguna',['galeri' => $galeri]);
    }

    public function informasiWisata(){
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->paginate(2);
        $galeri = DB::table('galeri')->get();
        return view('infowisataPengguna',['informasi_wisata' => $informasi_wisata],['galeri' => $galeri]);
    }

    public function informasiStatistik(){
        $informasi_statistik = DB::table('informasi_statistik')->get();
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('infostatistikPengguna',['informasi_statistik'=> $informasi_statistik],['informasi_wisata' => $informasi_wisata]);
    }

    public function tanya(){
        $pertanyaan = DB::table('pertanyaan')->orderBy('created_at','DESC')->paginate(10);
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('tanyaUser',['pertanyaan' => $pertanyaan],['informasi_wisata' => $informasi_wisata]);
    }

    public function answ(){
        return view('answer');
    }

    public function add(Request $request){
        $tambah = new tanyajawab();
        $tambah->daftar_pertanyaan = $request->daftar_pertanyaan;
        $tambah->jawaban = $request->jawaban;
        $tambah->pengirim = $request->pengirim;
        $tambah -> save();
        return redirect('/tanyaPengguna');
    }

    public function aboutUsPengguna(){
        $aboutUs = DB::table('aboutus')->get();
        $saran = saran::inRandomOrder()->limit(3)->get();
        return view('aboutUsPengguna',['aboutus' => $aboutUs],['saran' => $saran]);
    }

    public function store(Request $request){
        $saran = new saran();   
        $saran->pengirim = $request->pengirim;
        $saran->tanggal = now();
        $saran->email = $request->email;
        $saran->subjek = $request->subjek;
        $saran->daftar_saran = $request->daftar_saran;

        $saran -> save();
        return redirect('aboutUs');
        
    }

    public function kuliner(){
        $kuliner = DB::table('kuliner')->orderBy('created_at','DESC')->get();
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('kulinerPengguna',['kuliner' => $kuliner],['informasi_wisata' => $informasi_wisata]);
    }

    public function budayacon(){
        $budaya = DB::table('budaya')->orderBy('created_at','DESC')->get();
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('budayaPengguna',['budaya' => $budaya],['informasi_wisata' => $informasi_wisata]);
    }
}
