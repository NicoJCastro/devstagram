<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevStragram - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow-md">
        <div class="container mx-auto flex flex-wrap justify-between items-center">
            <!-- Logo -->
            <h1 class="text-3xl font-black text-sky-600">
                DevStagram
            </h1>

            <!-- Navigation -->
            <nav class="flex space-x-4 items-center bg-gray-50 p-3 rounded-lg shadow">
                <a 
                    href="#" 
                    class="font-bold uppercase text-gray-600 text-sm hover:text-gray-800 transition-colors focus:outline-none focus:ring-2 focus:ring-sky-500 border-b-2 border-transparent hover:border-sky-500">
                    Login
                </a>
                <a 
                    href="{{route('register')}}" 
                    class="font-bold uppercase text-gray-600 text-sm hover:text-gray-800 transition-colors focus:outline-none focus:ring-2 focus:ring-sky-500 border-b-2 border-transparent hover:border-sky-500">
                    Crear Cuenta
                </a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10 text-sky-700">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10 bg-white border-t">
        Devstagram - Todos los derechos reservados &copy; {{ now()->year }}
    </footer>
</body>

</html>
