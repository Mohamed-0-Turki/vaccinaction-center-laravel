<form
    class="w-full px-6 py-3 font-bold h-12 text-lg text-white rounded-lg transition-all duration-200 ease-in-out capitalize flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white"
    style="background-color: {{ $backgroundColor ?? '#3490dc' }}"
    action="{{ $action ?? '#' }}"
    method="{{ $method ?? 'POST' }}"
    x-data="{ isLoading: false }"
    x-on:submit="isLoading = true"
>
    @csrf
    @if (!empty($actualMethod))
        @method($actualMethod)
    @endif

    <button
        class="w-full h-full flex gap-3 items-center justify-center focus:outline-none"
        type="submit"
        x-bind:disabled="isLoading"
    >
        @if (!empty($slot) || !empty($icon))
            <div class="w-max h-full flex gap-3 items-center justify-center">
                <!-- Loading Spinner (if loading) -->
                <template x-if="isLoading">
                    <i class="fa-solid fa-spinner fa-spin"></i>
                </template>

                <!-- Icon (if provided and not loading) -->
                <template x-if="!isLoading && '{{ $icon }}'">
                    <i class="{{ $icon }}"></i>
                </template>

                <!-- Text (if provided and not loading) -->
                <template x-if="!isLoading && '{{ trim($slot) }}'">
                    <span>{{ $slot }}</span>
                </template>
            </div>
        @endif
    </button>
</form>