<?php

namespace App\Http\Controllers\Auth;

use App\Error;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ErrorController extends Controller
{
    public function index()
    {
        return view('auth.error.index');
    }


}
