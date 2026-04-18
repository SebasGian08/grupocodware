<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('estado', 1)->get();

        $blogs = Blog::where('status', 1)
                ->latest('id_blog')
                ->take(6)
                ->get();

                
        return view('pages.home', compact('services', 'blogs'));
    }

    public function store(Request $request)
    {
        return back()->with('success', 'Mensaje enviado');
    }
}