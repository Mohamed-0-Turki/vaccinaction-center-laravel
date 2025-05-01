<div class="w-full overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
        <thead class="bg-gray-100 text-gray-700 uppercase text-sm font-semibold sticky top-0">
            <tr>
                @foreach ($headers as $header)
                    <th class="py-4 px-5 text-left border-b border-gray-300">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="text-gray-700 divide-y divide-gray-200">
            {{ $slot }}
        </tbody>
    </table>
</div>