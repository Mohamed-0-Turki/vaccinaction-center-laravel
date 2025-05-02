@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-center">Edit City</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-6">
            <ul class="list-disc pl-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.cities.update', $city) }}" method="POST"
        class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">City Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $city->name) }}"
                class="w-full p-2 border border-gray-300 rounded-md" required />
        </div>

        <div class="mt-6">
            <x-buttons.action-button
                backgroundColor="#10b981"
                textColor="#ffffff"
                icon="fa-solid fa-save"
            >
                Update
            </x-buttons.action-button>
        </div>
    </form>
@endsection
