<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Senjata;
use App\Models\TipeSenjata;

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

    public function create(){
        return view('formcrud.senjata', [
            'title' => 'Create',
            'tipeSenjatas' => TipeSenjata::all()
        ]);
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_senjata' => 'required|max:255',
            'tipe_senjata_id' => 'required',
            'link_gambar' => 'required',
            'deskripsi_senjata' => 'required'
        ]);

        Senjata::create($validatedData);

        return redirect('/senjatas')->with('success', 'Senjata berhasil ditambahkan!');
    }

    public function edit(Senjata $senjata)
    {
        return view('formcrud.editsenjata',[
                'title' => 'Edit',
                'senjata' => $senjata,
                'tipeSenjata' => TipeSenjata::all()
            ]);  
    }

    public function update(Senjata $senjata){
        $validatedData = request()->validate([
            'nama_senjata' => 'required|max:255',
            'tipe_senjata_id' => 'required',
            'link_gambar' => 'required',
            'deskripsi_senjata' => 'required'
        ]);

        Senjata::where('id', $senjata->id)->update($validatedData);

        return redirect('/senjatas')->with('update', 'Senjata berhasil diupdate!');
    }

    public function destroy(Senjata $senjata)
    {
        $senjata = Senjata::find($senjata->id);
        $senjata->delete();

        return redirect('/senjatas')->with('delete', 'Senjata berhasil dihapus!');
    }
}
