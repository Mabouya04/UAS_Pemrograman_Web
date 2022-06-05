<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

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
}
