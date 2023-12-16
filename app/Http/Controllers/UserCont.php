<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lowongan;

class UserCont extends Controller
{
    function index() {
        $dataAdmin = User::where('role', 'alumni')->get();
        return view('lowongan.lowongan');
    }  
    function tbladmin(){
        $userData = User::where('role', 'admin')->get();
        return view('auth.tbladmin', compact('userData'));
    }
    function admin() {
        $dataAdmin = User::where('role', 'admin')->get();
        return view('auth.admin');
    }  
    public function showregister()
    {
        return view('auth.register');
    }

    function tblalumni() {
        $userData = User::where('role', 'alumni')->get();
        return view('auth.tblalumni', compact('userData'));
    }
    function data(){
        $data ['lowongans'] = Lowongan::all();
        return view('lowongan.dataLowongan', $data);
    }
    
}
