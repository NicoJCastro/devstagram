<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

   

    public function store(Request $request){

         //Modificar request para validar si se repite un username

        $request->request->add(['username' => Str::slug($request->username)]);
    

        // Validación
        $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
            // Como en el modelo ya aplica automaitcamente el hash no es necesario usar:
            // 'password' => Hash::make( $request->password)
            
        ]);

        //Autenticar un usuario
        auth()->attempt(['email' => $request->email, 'password' => $request->password]);

        //Redureccionar
        return redirect()->route('posts.index');
    }
}
