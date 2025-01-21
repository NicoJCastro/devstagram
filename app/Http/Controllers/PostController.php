<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth'); En Laravel 11 los middleware van en las rutas (web.php)
    }

    public function index(){        
       return view('dashboard');
    }
}
