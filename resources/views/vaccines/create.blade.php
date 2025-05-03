@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-center">Add Vaccine</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-2 rounded mb-4">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.vaccines.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label class="block font-medium text-sm">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium text-sm">Description</label>
            <textarea name="description" rows="3" class="w-full p-2 border rounded">{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium text-sm">Doses Required</label>
            <input type="number" name="doses_required" value="{{ old('doses_required', 1) }}" min="1" class="w-full p-2 border rounded" required>
        </div>

        <x-buttons.action-button icon="fa-solid fa-plus" backgroundColor="#10b981" textColor="#ffffff">
            Create Vaccine
        </x-buttons.action-button>
    </form>
@endsection
