<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

class MapController extends Controller
{
    public function index()
    {
        return view('maps', [
            'title' => 'Map',
            'data' => Map::all()
        ]);
    }
    public function show($id)
    {
        return view('map', [
            'title' => 'Map',
            'data' => Map::find($id)
        ]);
    }
}
