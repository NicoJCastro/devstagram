<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth'); En Laravel 11 los middleware van en las rutas (web.php)
    }

    public function index(User $user){

    
       return view('dashboard', [
           'user' => $user
       ]);
    }

    public function create(){        
         return view('posts.create');
    }

    public function store(Request $request) {

       $request->validate([
        'titulo' => 'required|max:225',
        'descripcion' => 'required',
        'imagen' => 'required'
        ]);

        Post::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('posts.index', auth()->user()->username);

    }
}
