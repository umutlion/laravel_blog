<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Settings;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        view()->share('setting', Settings::find(1));
    }

    public function index(){
        return view('back.dashboard');
    }

    public function login(){
        return view('back.auth.login');
    }

    public function login_post(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            toastr()->success('Selam!', 'Tekrardan hoşgeldin. Welcome back!');
            return redirect()->route('dashboard');
        }
        return redirect()->route('auth.login')->withErrors('Email veya parola hatalı.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function register(){
        return view('back.auth.register');
    }

    public function forget(){
        return view('back.auth.forg_pass');
    }
}
