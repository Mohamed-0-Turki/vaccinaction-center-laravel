@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-center">Centers</h1>

    @if (session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4 text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4 text-right">
        <a href="{{ route('admin.centers.create') }}"
           class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            + Add Center
        </a>
    </div>

    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">City</th>
                <th class="border px-4 py-2">Address</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($centers as $center)
                <tr>
                    <td class="border px-4 py-2">{{ $center->id }}</td>
                    <td class="border px-4 py-2">{{ $center->name }}</td>
                    <td class="border px-4 py-2">{{ $center->city->name }}</td>
                    <td class="border px-4 py-2">{{ $center->address }}</td>
                    <td class="border px-4 py-2 flex gap-2">
                        <a href="{{ route('admin.centers.edit', $center) }}"
                           class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
                            Edit
                        </a>
                        <form action="{{ route('admin.centers.destroy', $center) }}" method="POST" onsubmit="return confirm('Delete this center?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
