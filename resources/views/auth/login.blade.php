<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Vaccinaction Center</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-center text-2xl font-bold mb-6">Admin Login</h1>

        <!-- Show errors -->
        @if ($errors->any())
            <div class="bg-red-500 text-white p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    class="w-full p-2 border border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full p-2 border border-gray-300 rounded-md" />
            </div>

            <div class="mb-4 flex justify-between items-center">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
