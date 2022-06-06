<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        if(auth()->check()){
            return view('welcome',[
                'title' => 'Home',
                'user' => User::all(),

            ]);
        }
        else{
            return view('welcome',[
                'title' => 'Home'
            ]);
        }
    }
}
