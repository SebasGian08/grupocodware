<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('estado', 1)->get();
        return view('pages.services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::with('plans.features')
            ->where('slug', $slug)
            ->where('estado', 1)
            ->firstOrFail();

        $services = Service::where('estado', 1)
            ->where('slug', '!=', $slug)
            ->get();

        return view('pages.servicios.show', compact('service', 'services'));
    }
}