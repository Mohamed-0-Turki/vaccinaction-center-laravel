<a
    href="{{ $action }}"
    class="text-lg w-full px-6 py-3 font-bold text-white rounded-lg flex items-center justify-center transition-all duration-200 ease-in-out capitalize gap-3 hover:brightness-110 active:brightness-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
    style="background-color: {{ $backgroundColor }}; color: {{ $textColor }}"
>
    <!-- Icon (if provided) -->
    @if ($icon)
        <i class="{{ $icon }}"></i>
    @endif

    <!-- Text (if provided) -->
    @if (! $slot->isEmpty())
        <span>{{ $slot }}</span>
    @endif
</a>