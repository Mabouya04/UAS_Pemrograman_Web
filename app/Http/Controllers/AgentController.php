<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Role;

class AgentController extends Controller
{
    public function index(){
        return view ('agent' , [
            "title" => "Agent",
            "agents" => Agent::all()
        ]);
    }

    public function show(Agent $agentdetail){
        return view('agentdetail', [
            "title" => "Detail Agent",
            "agent" => $agentdetail
        ]);
    }

    public function create(){
        return view('formcrud.agent', [
            'title' => 'Create',
            'roles' => Role::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_agent' => 'required|max:255',
            'role_id' => 'required',
            'link_agent' => 'required',
            'body' => 'required'
        ]);

        Agent::create($validatedData);

        return redirect('/agent')->with('success', 'Agent berhasil ditambahkan!');
    }

    public function edit(Agent $agent)
    {
        return view('formcrud.editagent',[
                'title' => 'Edit',
                'agent' => $agent,
                'roles' => Role::all()
            ]);  
    }

    public function update(Agent $agent){
        $validatedData = request()->validate([
            'nama_agent' => 'required|max:255',
            'role_id' => 'required',
            'link_agent' => 'required',
            'body' => 'required'
        ]);

        Agent::where('id', $agent->id)->update($validatedData);

        return redirect('/agent')->with('update', 'Agent berhasil diupdate!');
    }

    public function destroy(Agent $agent)
    {
        $agent = Agent::find($agent->id);
        $agent->delete();

        return redirect('/agent')->with('delete', 'Agent berhasil dihapus!');
    }
}
