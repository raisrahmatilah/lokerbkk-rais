<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganCont extends Controller
{
    function show(){
        return view('lowongan.pengajuan');
    }
    function index(){
        $data ['lowongan'] = Lowongan::all();
        return view('lowongan.lowongan',$data);
    }
    function buat(Request $req){
        Lowongan::create([
            'name' => $req->name,
            'nohp' => $req->nohp,
            'nama' => $req->nama,
            'posisi' => $req->posisi,
            'persyaratan' => $req->persyaratan,
            'tglbuka' => $req->tglbuka,
            'tgltutup' => $req->tgltutup,
            'fotolowongan' => $req->file('fotolowongan')->store('foto'),
            'status' => $req->status,
        ]);
        return redirect('lowongan.lowongan');
    }
}
