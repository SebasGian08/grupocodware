<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function store(Request $request)
    {
        return back()->with('success', 'Mensaje enviado');
    }
}