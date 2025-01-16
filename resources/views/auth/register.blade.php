@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:items-center md:gap-10 p-5">
    <!-- Sección de la Imagen -->
    <div class="md:w-6/12 bg-gray-100 p-5 rounded-lg shadow-lg flex justify-center items-center">
        <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">        
    </div>

    <!-- Sección del Formulario -->
    <div class="md:w-5/12 bg-white p-8 rounded-lg shadow-lg">
        <form method="POST" action="/crear-cuenta">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input id="name" name="name" type="text" placeholder="Tu Nombre" class="border p-3 w-full rounded-lg">
            </div>

            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre de Usuario
                </label>
                <input id="username" name="username" type="text" placeholder="Tu Nombre de Usuario" class="border p-3 w-full rounded-lg">
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input id="email" name="email" type="text" placeholder="Tu Email de Registro" class="border p-3 w-full rounded-lg">
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input id="password" name="password" type="password" placeholder="Tu Password" class="border p-3 w-full rounded-lg">
            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Repetir Password
                </label>
                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite tu Password" class="border p-3 w-full rounded-lg">
            </div>

            <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection
