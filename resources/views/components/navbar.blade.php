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
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 text-emerald-600 hover:text-emerald-700">
                    <i data-lucide="arrow-left" class="w-5 h-5"></i>
                    <span class="hidden md:inline font-medium">Kembali</span>
                </a>
                <span class="text-gray-300 opacity-60">|</span>
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/logo-masjid-al-muhajirin-no-bg.png') }}" alt="Logo"
                            class="w-full h-full object-contain" />
                    </div>
                    <div>
                        <h1 class="font-bold text-emerald-800">Al-Muhajirin</h1>
                        <p class="text-xs text-emerald-600">Infaq & Shodaqoh Online</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
@elseif ($isGalleryPage)
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}"
                    class="flex items-center space-x-2 text-emerald-600 hover:text-emerald-700">
                    <i data-lucide="arrow-left" class="w-5 h-5"></i>
                    <span class="hidden md:inline font-medium">Kembali</span>
                </a>
                <span class="text-gray-300 opacity-60">|</span>
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/logo-masjid-al-muhajirin-no-bg.png') }}" alt="Logo"
                            class="w-full h-full object-contain" />
                    </div>
                    <div>
                        <h1 class="font-bold text-emerald-800">Al-Muhajirin</h1>
                        <p class="text-xs text-emerald-600">Galeri Kegiatan Masjid</p>
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
                    <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/logo-masjid-al-muhajirin-no-bg.png') }}" alt="Logo"
                            class="w-full h-full object-contain" />
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-emerald-800">Masjid Al-Muhajirin</h1>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    @if ($is404Page)
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
                        <a href="{{ route('home') }}#fasilitas"
                            class="text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                            Fasilitas
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
                            class="nav-link relative px-3 py-2 text-gray-700 hover:text-emerald-600 font-medium transition-all duration-300 ease-in-out group"
                            data-section="beranda">
                            Beranda
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 ease-in-out"></span>
                        </a>
                        <a href="#tentang"
                            class="nav-link relative px-3 py-2 text-gray-700 hover:text-emerald-600 font-medium transition-all duration-300 ease-in-out group"
                            data-section="tentang">
                            Tentang Kami
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 ease-in-out"></span>
                        </a>
                        <a href="#program"
                            class="nav-link relative px-3 py-2 text-gray-700 hover:text-emerald-600 font-medium transition-all duration-300 ease-in-out group"
                            data-section="program">
                            Program
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 ease-in-out"></span>
                        </a>
                        <a href="#fasilitas"
                            class="nav-link relative px-3 py-2 text-gray-700 hover:text-emerald-600 font-medium transition-all duration-300 ease-in-out group"
                            data-section="fasilitas">
                            Fasilitas
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 ease-in-out"></span>
                        </a>
                        <a href="#galeri"
                            class="nav-link relative px-3 py-2 text-gray-700 hover:text-emerald-600 font-medium transition-all duration-300 ease-in-out group"
                            data-section="galeri">
                            Galeri
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 ease-in-out"></span>
                        </a>
                        <a href="#kontak"
                            class="nav-link relative px-3 py-2 text-gray-700 hover:text-emerald-600 font-medium transition-all duration-300 ease-in-out group"
                            data-section="kontak">
                            Kontak
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 ease-in-out"></span>
                        </a>
                        <a href="{{ route('donasi') }}">
                            <button
                                class="bg-amber-500 hover:bg-amber-600 text-white font-semibold px-6 py-2 rounded-md transition-all duration-300 transform hover:scale-105 hover:shadow-lg cursor-pointer">
                                Infaq & Shodaqoh
                            </button>
                        </a>
                    @endif

                    {{-- JavaScript untuk Active Section Detection --}}
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const navLinks = document.querySelectorAll('.nav-link');
                            const sections = document.querySelectorAll('section[id]');

                            // Function untuk update active state
                            function updateActiveLink() {
                                const scrollPosition = window.scrollY + 100; // Offset untuk navbar
                                let currentSection = '';

                                // Cari section yang sedang aktif
                                sections.forEach(section => {
                                    const sectionTop = section.offsetTop;
                                    const sectionHeight = section.offsetHeight;

                                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                                        currentSection = section.getAttribute('id');
                                    }
                                });

                                // Update active state pada navigation links
                                navLinks.forEach(link => {
                                    const linkSection = link.getAttribute('data-section');
                                    const underline = link.querySelector('span');

                                    if (linkSection === currentSection) {
                                        // Active state - menggunakan full Tailwind classes
                                        link.classList.remove('text-gray-700');
                                        link.classList.add('text-emerald-600');
                                        if (underline) {
                                            underline.classList.remove('w-0');
                                            underline.classList.add('w-full');
                                        }
                                    } else {
                                        // Inactive state
                                        link.classList.remove('text-emerald-600', 'bg-emerald-50', 'rounded-md');
                                        link.classList.add('text-gray-700');
                                        if (underline) {
                                            underline.classList.remove('w-full');
                                            underline.classList.add('w-0');
                                        }
                                    }
                                });
                            }

                            // Smooth scrolling untuk navigation links
                            navLinks.forEach(link => {
                                link.addEventListener('click', function(e) {
                                    e.preventDefault();
                                    const targetId = this.getAttribute('href').substring(1);
                                    const targetSection = document.getElementById(targetId);

                                    if (targetSection) {
                                        const offsetTop = targetSection.offsetTop - 80; // Offset untuk navbar
                                        window.scrollTo({
                                            top: offsetTop,
                                            behavior: 'smooth'
                                        });
                                    }
                                });
                            });

                            // Throttle function untuk optimasi performa
                            function throttle(func, limit) {
                                let inThrottle;
                                return function() {
                                    const args = arguments;
                                    const context = this;
                                    if (!inThrottle) {
                                        func.apply(context, args);
                                        inThrottle = true;
                                        setTimeout(() => inThrottle = false, limit);
                                    }
                                }
                            }

                            // Event listeners
                            updateActiveLink(); // Set initial state
                            window.addEventListener('scroll', throttle(updateActiveLink, 10));
                            window.addEventListener('hashchange', updateActiveLink);
                        });
                    </script>

                    {{-- CSS tambahan untuk efek hover yang lebih smooth --}}
                    <style>
                        .nav-link:hover span {
                            @apply w-full;
                        }

                        .nav-link.group:hover {
                            @apply transform -translate-y-0.5;
                        }

                        /* Smooth transition untuk semua perubahan */
                        .nav-link {
                            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                        }

                        .nav-link span {
                            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                        }
                    </style>
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
                    <!-- Default Mobile Navigation -->
                    <a href="#beranda" @click="isMenuOpen = false"
                        class="text-gray-700 hover:text-emerald-600 font-medium">Beranda</a>
                    <a href="#tentang" @click="isMenuOpen = false"
                        class="text-gray-700 hover:text-emerald-600 font-medium">Tentang Kami</a>
                    <a href="#program" @click="isMenuOpen = false"
                        class="text-gray-700 hover:text-emerald-600 font-medium">Program</a>
                    <a href="#fasilitas" @click="isMenuOpen = false"
                        class="text-gray-700 hover:text-emerald-600 font-medium">Fasilitas</a>
                    <a href="#galeri" @click="isMenuOpen = false"
                        class="text-gray-700 hover:text-emerald-600 font-medium">Galeri</a>
                    <a href="#kontak" @click="isMenuOpen = false"
                        class="text-gray-700 hover:text-emerald-600 font-medium">Kontak</a>
                    <a href="{{ route('donasi') }}" @click="isMenuOpen = false">
                        <button
                            class="bg-amber-500 hover:bg-amber-600 text-white font-semibold w-full py-2 rounded-md transition-colors cursor-pointer">
                            Infaq & Shodaqoh
                        </button>
                    </a>
                </nav>
            </div>
        </div>
    </header>
@endif
