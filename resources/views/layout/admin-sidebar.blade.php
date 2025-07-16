<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md">
        <div class="p-4 border-b border-gray-200">
            <div class="flex items-center space-x-3">
                <h1 class="text-xl font-semibold">Absensi<span class="text-indigo-600">Sekolah</span></h1>
            </div>
        </div>
        <nav class="p-2">
            <div class="mb-4 px-2">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Menu Utama</p>
            </div>
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="sidebar-item flex items-center p-2 rounded-lg {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt w-6"></i>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
