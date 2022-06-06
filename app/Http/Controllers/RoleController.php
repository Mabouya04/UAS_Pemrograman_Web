<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
        return view('roles', [
            'title' => 'Halaman Roles',
            'roles' => Role::all()
        ]);
    }

    public function show(Role $role){
        return view('role', [
            'title' => $role->name,
            'agents' => $role->agent,
            'role' => $role->name
        ]);
    }
}
