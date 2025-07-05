    @php
        $isGalleryPage = request()->routeIs('galeri');
        $isDonationPage = request()->routeIs('donasi');
        $is404Page = request()->routeIs('404');
        $currentPage = request()->route()->getName();
    @endphp

    @if ($isDonationPage)
        <!-- Header -->
        <header class="bg-white shadow-sm">
            <div class="container mx-auto px-4 py-4">
                <div class="flex items-center justify-between">
                    <a href="{{ route('home') }}"
                        class="flex items-center space-x-2 text-emerald-600 hover:text-emerald-700">
                        <i data-lucide="arrow-left" class="w-5 h-5"></i>
                        <span class="font-medium">Kembali</span>
                    </a>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center">
                            <i data-lucide="university" class="w-5 h-5 text-white"></i>
                        </div>
                        <div>
                            <h1 class="font-bold text-emerald-800">Al-Muhajirin</h1>
                            <p class="text-xs text-emerald-600">Infaq & Shodaqoh Online</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    @else
        <!-- Header / Navbar -->
        <header id="navbar" class="bg-white shadow-lg sticky top-0 z-50 transition-shadow duration-300"
            x-data="{ isMenuOpen: false }">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <div class="flex items-center space-x-3">
                        @if ($isGalleryPage)
                            <a href="{{ route('home') }}"
                                class="flex items-center space-x-2 text-emerald-600 hover:text-emerald-700">
                                <i data-lucide="arrow-left" class="w-5 h-5"></i>
                                <span class="font-medium hidden md:inline">Kembali</span>
                            </a>
                            <div class="hidden md:block w-px h-6 bg-gray-300 mx-4"></div>
                        @endif
                        <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center">
                            <i data-lucide="university" class="w-6 h-6 text-white"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-emerald-800">Masjid Al-Muhajirin</h1>
                        </div>
                    </div>

                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex items-center space-x-8">
                        @if ($isGalleryPage)
                            <!-- Gallery Page Navigation -->
                            <a href="{{ route('home') }}#beranda"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                                Beranda
                            </a>
                            <a href="{{ route('home') }}#tentang"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                                Tentang Kami
                            </a>
                            <a href="{{ route('home') }}#program"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                                Program
                            </a>
                            <a href="{{ route('galeri') }}" class="text-emerald-600 font-medium">
                                Galeri
                            </a>
                            <a href="{{ route('home') }}#kontak"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                                Kontak
                            </a>
                            <a href="{{ route('donasi') }}"
                                class="bg-amber-500 hover:bg-amber-600 text-white font-semibold px-6 py-2 rounded-md transition-colors">
                                Infaq & Shodaqoh
                            </a>
                        @elseif ($is404Page)
                            <!-- 404 Page Navigation -->
                            <a href="{{ route('home') }}#beranda"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                                Beranda
                            </a>
                            <a href="{{ route('home') }}#tentang"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                                Tentang Kami
                            </a>
                            <a href="{{ route('home') }}#program"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                                Program
                            </a>
                            <a href="{{ route('galeri') }}#galeri"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                                Galeri
                            </a>
                            <a href="{{ route('home') }}#kontak"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                                Kontak
                            </a>
                            <a href="{{ route('donasi') }}"
                                class="bg-amber-500 hover:bg-amber-600 text-white font-semibold px-6 py-2 rounded-md transition-colors">
                                Infaq & Shodaqoh
                            </a>
                        @else
                            <!-- Default Navigation -->
                            <a href="#beranda"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">Beranda</a>
                            <a href="#tentang"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">Tentang
                                Kami</a>
                            <a href="#program"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">Program</a>
                            <a href="#galeri"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">Galeri</a>
                            <a href="#kontak"
                                class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">Kontak</a>
                            <a href="{{ route('donasi') }}">
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white font-semibold px-6 py-2 rounded-md transition-colors cursor-pointer">
                                    Infaq & Shodaqoh
                                </button>
                            </a>
                        @endif
                    </nav>

                    <!-- Mobile Menu Button -->
                    <button @click="isMenuOpen = !isMenuOpen" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
                        <i x-show="!isMenuOpen" data-lucide="menu" class="w-6 h-6"></i>
                        <i x-show="isMenuOpen" data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>

                <!-- Mobile Navigation -->
                <div x-show="isMenuOpen" x-transition class="md:hidden py-4 border-t">
                    <nav class="flex flex-col space-y-4">
                        @if ($isGalleryPage)
                            <!-- Gallery Page Mobile Navigation -->
                            <a href="{{ route('home') }}#beranda"
                                class="text-gray-700 hover:text-emerald-600 font-medium">
                                Beranda
                            </a>
                            <a href="{{ route('home') }}#tentang"
                                class="text-gray-700 hover:text-emerald-600 font-medium">
                                Tentang Kami
                            </a>
                            <a href="{{ route('home') }}#program"
                                class="text-gray-700 hover:text-emerald-600 font-medium">
                                Program
                            </a>
                            <a href="{{ route('galeri') }}" class="text-emerald-600 font-medium">
                                Galeri
                            </a>
                            <a href="{{ route('home') }}#kontak"
                                class="text-gray-700 hover:text-emerald-600 font-medium">
                                Kontak
                            </a>
                            <a href="{{ route('donasi') }}"
                                class="bg-amber-500 hover:bg-amber-600 text-white font-semibold w-full py-2 px-4 rounded-md text-center transition-colors">
                                Infaq & Shodaqoh
                            </a>
                        @else
                            <!-- Default Mobile Navigation -->
                            <a href="#beranda" class="text-gray-700 hover:text-emerald-600 font-medium">Beranda</a>
                            <a href="#tentang" class="text-gray-700 hover:text-emerald-600 font-medium">Tentang Kami</a>
                            <a href="#program" class="text-gray-700 hover:text-emerald-600 font-medium">Program</a>
                            <a href="#galeri" class="text-gray-700 hover:text-emerald-600 font-medium">Galeri</a>
                            <a href="#kontak" class="text-gray-700 hover:text-emerald-600 font-medium">Kontak</a>
                            <a href="{{ route('donasi') }}">
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white font-semibold w-full py-2 rounded-md transition-colors cursor-pointer">
                                    Infaq & Shodaqoh
                                </button>
                            </a>
                        @endif
                    </nav>
                </div>
            </div>
        </header>
    @endif
