<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Roleontroller extends Controller
{
    public function index()
    {
        // Por ahora, simularemos datos o si tienes modelo Role, úsalo
        // $roles = Role::all(); 
        return view('admin.roles.index');
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        // Lógica para guardar el rol
        return redirect()->route('admin.roles.index')->with('success', 'Rol creado.');
    }
}