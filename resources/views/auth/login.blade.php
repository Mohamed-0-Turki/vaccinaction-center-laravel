@extends('layouts.app')

@section('content')
    <h1 class="text-center text-2xl font-bold mb-6">Login</h1>

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
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="w-full p-2 border border-gray-300 rounded-md" />
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password"
                class="w-full p-2 border border-gray-300 rounded-md" />
        </div>

        <div class="mb-4 flex justify-between items-center">
            <!-- Submit Button -->
            <x-buttons.action-button
                backgroundColor="#10b981"
                textColor="#ffffff"
                icon="fa-solid fa-right-to-bracket"
            >
                Login
            </x-buttons.action-button>
        </div>
    </form>
@endsection
