<div class="flex flex-col gap-2 w-full">
    <!-- Label -->
    @if ($label)
        <label for="{{ $id }}" class="block text-gray-700 text-lg font-semibold capitalize">
            {{ $label }}
        </label>
    @endif

    <!-- Input Field -->
    <input
        class="bg-slate-50 w-full px-4 py-3 text-base sm:text-lg border @error($name) border-red-300 @else border-gray-300 @enderror rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 ease-in-out hover:border-blue-400 placeholder-gray-400"
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        @if($value) value="{{ $value }}" @endif
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        {{ $attributes }}
    >

    <!-- Error Message -->
    @error($name)
        <span class="ml-2 text-red-500 text-sm font-medium mt-1">
            {{ $message }}
        </span>
    @enderror
</div>