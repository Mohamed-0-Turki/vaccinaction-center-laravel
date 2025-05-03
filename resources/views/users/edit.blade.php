@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-center">Edit User</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-2 rounded mb-4">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user) }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium text-sm">Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium text-sm">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium text-sm">Role</label>
            <select name="role" class="w-full p-2 border rounded" required>
                <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                <option value="manager" {{ old('role', $user->role) == 'manager' ? 'selected' : '' }}>Manager</option>
                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <x-buttons.action-button icon="fa-solid fa-save" backgroundColor="#3b82f6" textColor="#ffffff">
            Update User
        </x-buttons.action-button>
    </form>
@endsection
