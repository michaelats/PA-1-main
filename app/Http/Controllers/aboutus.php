<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\saran;
class aboutus extends Controller
{
    public function aboutUs(){
        $aboutUs = DB::table('aboutus')->get();
        $saran = saran::inRandomOrder()->limit(3)->get();
        return view('aboutUs',['aboutus' => $aboutUs],['saran' => $saran]);
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
}
