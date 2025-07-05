<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard Admin') - Yayasan Masjid Al-Muhajirin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>

<body class="h-full bg-gray-50" x-data="{ sidebarOpen: false }">
    <!-- Container utama dengan flex -->
    <div class="flex h-screen bg-gray-50">

        <!-- Sidebar - Fixed di kiri dengan full height -->
        <div class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Sidebar content -->
                <div class="flex flex-col flex-grow bg-emerald-800 pt-5 pb-4 overflow-y-auto">
                    <!-- Logo/Header -->
                    <div class="flex items-center flex-shrink-0 px-4 mb-8">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <i data-lucide="building" class="w-6 h-6 text-emerald-800"></i>
                            </div>
                            <div class="text-white">
                                <h1 class="text-xl font-bold">Al-Muhajirin</h1>
                                <p class="text-sm text-emerald-200">Admin Dashboard</p>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <nav class="mt-5 flex-1 px-2 space-y-1">
                        <a href="{{ route('admin.dashboard') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700 {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-700' : '' }}">
                            <i data-lucide="home" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                            Dashboard
                        </a>

                        <a href="{{ route('admin.masjid') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700 {{ request()->routeIs('admin.masjid') ? 'bg-emerald-700' : '' }}">
                            <i data-lucide="building" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                            Data Masjid
                        </a>

                        <a href="{{ route('admin.program') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700 {{ request()->routeIs('admin.program') ? 'bg-emerald-700' : '' }}">
                            <i data-lucide="book-open" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                            Program
                        </a>

                        <a href="{{ route('admin.galeri-kegiatan') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700 {{ request()->routeIs('admin.galeri-kegiatan') ? 'bg-emerald-700' : '' }}">
                            <i data-lucide="calendar" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                            Kegiatan
                        </a>
                    </nav>

                    <!-- Logout section di bawah -->
                    <div class="flex-shrink-0 px-2 mt-8 pt-4 border-t border-emerald-700">
                        <a href="{{ route('login') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700">
                            <i data-lucide="log-out" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile sidebar -->
        <div x-show="sidebarOpen" class="fixed inset-0 flex z-40 lg:hidden" x-cloak>
            <!-- Overlay -->
            <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75"
                @click="sidebarOpen = false"></div>

            <!-- Mobile sidebar content -->
            <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                class="relative flex-1 flex flex-col max-w-xs w-full bg-emerald-800">

                <!-- Close button -->
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button @click="sidebarOpen = false"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <i data-lucide="x" class="h-6 w-6 text-white"></i>
                    </button>
                </div>

                <!-- Mobile sidebar content -->
                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <!-- Logo/Header -->
                    <div class="flex items-center flex-shrink-0 px-4 mb-8">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <i data-lucide="building" class="w-6 h-6 text-emerald-800"></i>
                            </div>
                            <div class="text-white">
                                <h1 class="text-xl font-bold">Al-Muhajirin</h1>
                                <p class="text-sm text-emerald-200">Admin Dashboard</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Navigation -->
                    <nav class="mt-5 px-2 space-y-1">
                        <a href="{{ route('admin.dashboard') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700 {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-700' : '' }}">
                            <i data-lucide="home" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                            Dashboard
                        </a>

                        <a href="{{ route('admin.masjid') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700 {{ request()->routeIs('admin.masjid') ? 'bg-emerald-700' : '' }}">
                            <i data-lucide="building" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                            Data Masjid
                        </a>

                        <a href="{{ route('admin.program') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700 {{ request()->routeIs('admin.program') ? 'bg-emerald-700' : '' }}">
                            <i data-lucide="book-open" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                            Program
                        </a>

                        <a href="{{ route('admin.galeri-kegiatan') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700 {{ request()->routeIs('admin.galeri-kegiatan') ? 'bg-emerald-700' : '' }}">
                            <i data-lucide="calendar" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                            Kegiatan
                        </a>
                    </nav>
                </div>

                <!-- Mobile logout -->
                <div class="flex-shrink-0 px-2 pb-4 border-t border-emerald-700 pt-4">
                    <a href="#"
                        class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-white hover:bg-emerald-700">
                        <i data-lucide="log-out" class="mr-3 flex-shrink-0 h-5 w-5"></i>
                        Logout
                    </a>
                </div>
            </div>
        </div>

        <!-- Main content area -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <!-- Top navigation bar -->
            <div class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow">
                <!-- Mobile menu button -->
                <button @click="sidebarOpen = true"
                    class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-500 lg:hidden">
                    <i data-lucide="menu" class="h-6 w-6"></i>
                </button>

                <!-- Top bar content -->
                <div class="flex-1 px-4 flex justify-between items-center">
                    <div class="flex-1">
                        <h1 class="text-2xl font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h1>
                    </div>

                    <!-- User menu -->
                    <div class="ml-4 flex items-center md:ml-6">
                        <div class="relative">
                            <div class="flex items-center space-x-3">
                                <span class="text-sm text-gray-700">Admin</span>
                                <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-sm font-medium">A</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- Flash messages -->
                        @if (session('success'))
                            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif

                        <!-- Page content -->
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>
