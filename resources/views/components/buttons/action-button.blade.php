<div class="w-full">
    <button
        class="text-lg w-full h-12 px-6 py-3 font-bold text-white rounded-lg flex items-center justify-center transition-all duration-200 ease-in-out capitalize gap-3 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        type="{{ $type ?? 'submit' }}"
        style="background-color: {{ $backgroundColor ?? '#3490dc' }}; color: {{ $textColor ?? '#ffffff' }}"
    >
        @if (!empty($icon))
            <i class="{{ $icon }}"></i>
        @endif

        @if (trim($slot))
            <span>{{ $slot }}</span>
        @endif
    </button>
</div>
