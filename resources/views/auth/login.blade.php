@extends('layouts.app')

@section('titulo')
    Inicia Sesión en DevStagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:items-center md:gap-10 p-5">
    <!-- Sección de la Imagen -->
    <div class="md:w-6/12 bg-gray-100 p-5 rounded-lg shadow-lg flex justify-center items-center">
        <img src="{{ asset('img/login.jpg') }}" alt="Imagen login de usuarios">        
    </div>

    <!-- Sección del Formulario -->
    <div class="md:w-5/12 bg-white p-8 rounded-lg shadow-lg">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if(session('mensaje'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
            @endif
            
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input id="email" name="email" type="email" placeholder="Tu Email de Registro" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{old('email')}}">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input id="password" name="password" type="password" placeholder="Tu Password" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>           

            <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection
