@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan - Yayasan Masjid Al-Muhajirin')
@section('description', 'Halaman yang Anda cari tidak ditemukan. Kembali ke beranda atau jelajahi halaman lainnya.')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-blue-50 flex items-center justify-center px-4">
    <div class="max-w-2xl mx-auto text-center">
        <!-- 404 Illustration -->
        <div class="mb-8">
            <div class="relative">
                <!-- Large 404 Text -->
                <div class="text-8xl md:text-9xl font-bold text-emerald-100 select-none">
                    404
                </div>

                <!-- Mosque Icon Overlay -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-24 h-24 md:w-32 md:h-32 bg-emerald-600 rounded-full flex items-center justify-center shadow-lg">
                        <i data-lucide="university" class="w-12 h-12 md:w-16 md:h-16 text-white"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Error Message -->
        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Halaman Tidak Ditemukan
            </h1>
            <p class="text-lg text-gray-600 mb-2">
                Maaf, halaman yang Anda cari tidak dapat ditemukan.
            </p>
            <p class="text-gray-500">
                Mungkin halaman telah dipindahkan atau URL yang dimasukkan salah.
            </p>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
            <a href="{{ route('home') }}"
                class="inline-flex items-center justify-center px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg transition-colors shadow-md">
                <i data-lucide="home" class="w-5 h-5 mr-2"></i>
                Kembali ke Beranda
            </a>

            <button onclick="history.back()"
                class="inline-flex items-center justify-center px-6 py-3 border-2 border-emerald-600 text-emerald-600 hover:bg-emerald-600 hover:text-white font-semibold rounded-lg transition-colors">
                <i data-lucide="arrow-left" class="w-5 h-5 mr-2"></i>
                Halaman Sebelumnya
            </button>
        </div>

        <!-- Contact Info -->
        <div class="mt-8 text-center">
            <p class="text-gray-600 mb-2">
                Butuh bantuan? Hubungi kami:
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 text-sm">
                <a href="tel:+62123456789" class="flex items-center text-emerald-600 hover:text-emerald-700">
                    <i data-lucide="phone" class="w-4 h-4 mr-2"></i>
                    (021) 123-4567
                </a>
                <a href="mailto:info@almuhajirin.org" class="flex items-center text-emerald-600 hover:text-emerald-700">
                    <i data-lucide="mail" class="w-4 h-4 mr-2"></i>
                    info@almuhajirin.org
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Add some floating elements for visual appeal -->
<div class="fixed inset-0 pointer-events-none overflow-hidden">
    <!-- Floating Shapes -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-emerald-200 rounded-full opacity-20 animate-pulse"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-blue-200 rounded-full opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-40 left-20 w-12 h-12 bg-amber-200 rounded-full opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
    <div class="absolute bottom-20 right-10 w-24 h-24 bg-purple-200 rounded-full opacity-20 animate-pulse" style="animation-delay: 0.5s;"></div>
</div>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>
@endsection