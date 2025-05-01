<div class="w-full" x-data="{ isLoading: false }">
    <button
        class="text-lg w-full h-12 px-6 py-3 font-bold text-white rounded-lg flex items-center justify-center transition-all duration-200 ease-in-out capitalize gap-3 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        type="{{ $type }}"
        style="background-color: {{ $backgroundColor }}; color: {{ $textColor }}"
        x-on:click="isLoading = true; $event.target.closest('form').submit()"
        x-bind:disabled="isLoading"
    >
        <!-- Loading Spinner (if loading) -->
        <template x-if="isLoading">
            <i class="fa-solid fa-spinner fa-spin"></i>
        </template>

        <!-- Icon (if provided and not loading) -->
        <template x-if="!isLoading && '{{ $icon }}'">
            <i class="{{ $icon }}"></i>
        </template>

        <!-- Text (if provided and not loading) -->
        <template x-if="!isLoading">
            <span>{{ $slot }}</span>
        </template>
    </button>
</div>