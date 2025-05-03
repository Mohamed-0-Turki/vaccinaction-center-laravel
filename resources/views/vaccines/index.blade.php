@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-center">Vaccines</h1>

    <a href="{{ route('admin.vaccines.create') }}" class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">Add Vaccine</a>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-200 rounded shadow">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 text-left">Name</th>
                <th class="p-2 text-left">Description</th>
                <th class="p-2 text-left">Doses Required</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($vaccines as $vaccine)
                <tr class="border-t">
                    <td class="p-2">{{ $vaccine->name }}</td>
                    <td class="p-2">{{ $vaccine->description }}</td>
                    <td class="p-2">{{ $vaccine->doses_required }}</td>
                    <td class="p-2 space-x-2 text-center">
                        <a href="{{ route('admin.vaccines.edit', $vaccine) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('admin.vaccines.destroy', $vaccine) }}" method="POST" class="inline-block"
                              onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="p-2 text-center">No vaccines found.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
