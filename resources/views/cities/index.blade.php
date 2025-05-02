@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-center">Cities</h1>

    <div class="max-w-4xl mx-auto">
        <a href="{{ route('admin.cities.create') }}"
            class="mb-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            <i class="fa fa-plus mr-1"></i> Add City
        </a>

        <table class="w-full bg-white shadow-md rounded mb-6">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">City Name</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $city->name }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('admin.cities.edit', $city) }}"
                                class="text-blue-600 hover:underline">
                                Edit
                            </a>

                            <form action="{{ route('admin.cities.destroy', $city) }}" method="POST"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($cities->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center px-4 py-6 text-gray-500">No cities found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
