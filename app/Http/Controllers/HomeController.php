<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function logado(){
        if (auth()->user()) {
            return view('registro');
        } else {
            return redirect()->route('login'); 
        }
    }

    public function logout(){
        return view('logout');
    }

}
