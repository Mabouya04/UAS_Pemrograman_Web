<?php

namespace App\Http\Controllers;

use App\Models\TipeSenjata;
use Illuminate\Http\Request;

class TipeSenjataController extends Controller
{
    public function index(){
        return view('tipes', [
            'title' => 'Tipe Senjatas',
            'tipeSenjatas' => TipeSenjata::all()
        ]);
    }

    public function show(TipeSenjata $tipe){
        return view('tipe', [
            'title' => $tipe->name,
            'tipes' => $tipe->Senjata,
            'tipe' => $tipe->name
        ]);
    }
}
