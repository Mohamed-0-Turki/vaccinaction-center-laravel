@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-center">Edit Center</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.centers.update', $center) }}" method="POST" class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Name</label>
            <input type="text" name="name" id="name" class="w-full p-2 border rounded" value="{{ old('name', $center->name) }}" required>
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium">Address</label>
            <textarea name="address" id="address" class="w-full p-2 border rounded">{{ old('address', $center->address) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="city_id" class="block text-sm font-medium">City</label>
            <select name="city_id" id="city_id" class="w-full p-2 border rounded" required>
                <option value="">Select City</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" @selected(old('city_id', $center->city_id) == $city->id)>{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <x-buttons.action-button backgroundColor="#f59e0b" textColor="#ffffff" icon="fa-solid fa-save">
            Update Center
        </x-buttons.action-button>
    </form>
@endsection
