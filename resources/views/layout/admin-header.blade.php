<header class="bg-blue-500 shadow-sm z-10">
    <div class="flex items-center justify-between px-6 py-3">
        <div class="flex items-center">
            <h2 class="text-xl font-semibold text-black">@yield('title', 'Dashboard')</h2>
        </div>
        <div class="flex items-center space-x-4">
            <div class="relative">
                <button class="text-gray-600 focus:outline-none">
                    <i class="fas fa-bell text-xl"></i>
                    <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                </button>
            </div>
            <div class="flex items-center">
                <img src="https://placehold.co/32x32" alt="User profile" class="w-8 h-8 rounded-full">
                <span class="ml-2 text-gray-700"></span>
            </div>
        </div>
    </div>
</header>
