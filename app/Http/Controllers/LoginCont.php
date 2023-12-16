<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginCont extends Controller
{
    function index(){
        return view('auth.login');
    }

    function login(Request $req){
        $req ->validate([
            'email' => 'required',
            'password'=> 'required'
        ],
        [
            'email.required'=> 'Email Harus Diisi',
            'password.required'=> 'Password Harus Diisi',

        ]);
        $infoLogin = [
            'email' => $req->email,
            'password' => $req->password
        ];
        if(Auth::attempt($infoLogin)){
            if(Auth::user()->role == 'admin'){
                return redirect('admin/user');
            }elseif(Auth::user()->role == 'alumni'){
                return redirect('/user');
            }
        }else{
            return redirect('/login')->withErrors('Username Dan Password Yang Anda Masukan Salah')->withInput();
        }
    }
    function showregister(){
        return view('auth.register');
    }
    function register(Request $req){
        $req ->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=>'required',
            'role'=>'required|in:admin,alumni',
        ]);
        $userData['name'] = $req->name;
        $userData['email'] = $req->email;
        $userData['password'] = $req->password;
        $userData['role'] = $req->role;

        User::create($userData);

        $infoLogin = [
            'email' => $req->email,
            'password' => $req->password
        ];
        if(Auth::attempt($infoLogin)){
            if(Auth::user()->role == 'admin'){
                return redirect('admin/user');
            }elseif(Auth::user()->role == 'alumni'){
                return redirect('/');
            }
        }else{
            return redirect('/login')->withErrors('Username Dan Password Yang Anda Masukan Salah')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
