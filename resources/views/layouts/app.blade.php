<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vaccinaction Center</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100">
        <nav class="bg-white shadow-md px-6 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="text-xl font-bold text-blue-600">
                Vaccin
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex gap-6 text-gray-700 font-medium">
                <a href="#" class="hover:text-blue-600 transition">Admins</a>
                <a href="#" class="hover:text-blue-600 transition">Cities</a>
                <a href="#" class="hover:text-blue-600 transition">Vaccines</a>
                <a href="#" class="hover:text-blue-600 transition">Centers</a>
            </div>

            <!-- Auth Buttons -->
            <div class="flex gap-2">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                        Logout
                    </button>
                </form>
                <a href="/login" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    Login
                </a>
            </div>
        </nav>

        <div class="container mx-auto p-4">
            @yield('content')
        </div>
    </body>
</html>
