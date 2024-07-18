<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    // function welcome(){
    //     $posts = Post::all();
    //     return view('welcome');
    // }
    function login(){
        return view('login');
    }
    function loginre(Request $request){
        $request->validate([
            'email' =>'required',
            'password' =>'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            // echo "sukses";
            // return redirect('/operator');
            if (Auth::user()->role =='admin'){
                return redirect('/index/operator'); 
            }elseif(Auth::user()->role =='user'){
                return redirect('/index/user');
            }
        }else{
            return redirect('')->withErrors('Username dan passsword yang dimasukan tidak sesuai')->withInput();
        }
    }
    function logout (){
        Auth::logout();
        return redirect('');
    }

}
