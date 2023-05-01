<?php

namespace App\Http\Controllers;
use App\Models\galeri;
use App\Models\aboutUs;
use App\Models\infowisata;
use App\Models\tanyajawab;
use App\Models\informasistatistik;
use App\Models\budaya_wis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        $informasi = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('index',['informasi' => $informasi]);
    }

    public function galeri(){
        $galeri = DB::table('galeri')->paginate(15);
        return view('galeri',['galeri' => $galeri]);
    }
    
    public function informasiWisata(){
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->paginate(5);
        $galeri = DB::table('galeri')->get();
        return view('informasiWisata',['informasi_wisata' => $informasi_wisata ],['galeri' => $galeri]);
    }

    public function informasiStatistik(){
        $informasi_statistik = DB::table('informasi_statistik')->get();
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('informasiStatistik',['informasi_statistik'=> $informasi_statistik],['informasi_wisata' => $informasi_wisata]);
    }

    public function tanyajawab(){
        $pertanyaan = DB::table('pertanyaan')->orderBy('created_at','DESC')->paginate(10);
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('tanyajawab',['pertanyaan' => $pertanyaan],['informasi_wisata' => $informasi_wisata]);
    }

    public function login(){
        return view('login');
    }
    public function selengkap($id_info_wisata){
        $edits = infowisata::find($id_info_wisata);
        return view('selengkapnya',compact('edits'));
    }

    public function kuliner(){
        $kuliner = DB::table('kuliner')->orderBy('created_at','DESC')->get();
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('kuliner',['kuliner' => $kuliner],['informasi_wisata' => $informasi_wisata]);
    }

    public function budayacon(){
        $budaya = DB::table('budaya')->orderBy('created_at','DESC')->get();
        $informasi_wisata = DB::table('informasi_wisata')->orderBy('created_at','DESC')->get();
        return view('budaya',['budaya' => $budaya],['informasi_wisata' => $informasi_wisata]);
    }

}
