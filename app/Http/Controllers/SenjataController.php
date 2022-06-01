<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Senjata;

class SenjataController extends Controller
{
    public function index()
    {
        return view('senjatas', [
            'title' => 'Senjatas',
            'senjatas' => Senjata::all()
        ]);
    }
    public function show($id)
    {
        return view('senjata', [
            'title' => 'Senjata',
            'senjata' => Senjata::find($id)
        ]);
    }
}
