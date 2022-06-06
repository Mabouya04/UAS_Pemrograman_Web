<?php

namespace App\Http\Controllers;

use App\Models\Agent;
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

    public function create(){
        return view('formcrud.createmap', [
            'title' => 'Create',
            'agents' => Agent::all()
        ]);
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_map' => 'required|max:255',
            'link_gambar_map' => 'required',
            'link_layout' => 'required',
            'agent_id' => 'required',
            'deskripsi_map' => 'required'
        ]);

        Map::create($validatedData);

        return redirect('/map')->with('success', 'Map berhasil ditambahkan!');
    }

    public function edit(Map $map)
    {
        return view('formcrud.editmap',[
                'title' => 'Edit',
                'map' => $map,
                'agents' => Agent::all()
            ]);  
    }

    public function update(Map $map){
        $validatedData = request()->validate([
            'nama_map' => 'required|max:255',
            'link_gambar_map' => 'required',
            'link_layout' => 'required',
            'agent_id' => 'required',
            'deskripsi_map' => 'required'
        ]);

        Map::where('id', $map->id)->update($validatedData);

        return redirect('/map')->with('update', 'Map berhasil diupdate!');
    }

    public function destroy(Map $map)
    {
        $map = Map::find($map->id);
        $map->delete();

        return redirect('/map')->with('delete', 'Map berhasil dihapus!');
    }

    
}
