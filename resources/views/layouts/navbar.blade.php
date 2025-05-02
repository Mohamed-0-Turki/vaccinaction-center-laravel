<nav class="bg-white shadow-md px-6 py-4 flex items-center justify-between">
    <!-- Logo -->
    <div class="text-xl font-bold text-blue-600">
        Vaccinaction Center
    </div>

    <!-- Navigation Links -->
    <div class="hidden md:flex gap-6 text-gray-700 font-medium">
        <a href="#" class="hover:text-blue-600 transition">Admins</a>
        <a href="{{ route('admin.cities.index') }}" class="hover:text-blue-600 transition">Cities</a>
        <a href="#" class="hover:text-blue-600 transition">Vaccines</a>
        <a href="{{ route('admin.centers.index') }}" class="hover:text-blue-600 transition">Centers</a>
    </div>

    <!-- Auth Buttons -->
    <div class="flex gap-2">
        @auth
            <x-buttons.inline-form-button
                action="{{ route('logout') }}"
                method="POST"
                backgroundColor="#ef4444"
            >
                Logout
            </x-buttons.inline-form-button>
        @endauth
        @guest
            <x-buttons.link-button action="{{ route('login') }}" backgroundColor="oklch(62.3% 0.214 259.815)" >
                Login
            </x-buttons.link-button>
        @endguest
    </div>
</nav>
