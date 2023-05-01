<?php

namespace App\Http\Controllers;
use App\Models\tanyajawab;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class tanya extends Controller
{
    public function tanyajawab(){
        $pertanyaan = DB::table('pertanyaan')->orderBy('created_at','DESC')->paginate(10);
        return view('tjadmin',['pertanyaan' => $pertanyaan]);
    }

    public function balas($id_pertanyaan){
        $balasKomen = tanyajawab::find($id_pertanyaan);
        return view('jawabKomen',compact('balasKomen'));
    }

    public function reply(Request $request,$id_pertanyaan){
        $reply = tanyajawab::find($id_pertanyaan);
        $reply->daftar_pertanyaan= $request->daftar_pertanyaan;
        $reply->jawaban = $request->jawaban;
        $reply->pengirim = $request->pengirim;
        $reply->tanggal_pertanyaan = now();
        $reply -> save();
        return redirect('/tanyaAdmin');    
    }
}
