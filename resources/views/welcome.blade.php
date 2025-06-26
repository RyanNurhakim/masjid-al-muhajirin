@extends('layouts.app')

@section('title', 'Beranda - Yayasan Masjid Al-Muhajirin')
@section('description', 'Yayasan Masjid Al-Muhajirin - Menyebarkan Cahaya Islam untuk Umat. Program pendidikan, sosial, dan kegiatan keagamaan sejak 1985.')

@section('content')
<div class="min-h-screen bg-white">
    <!-- Hero Section -->
    <section id="beranda" class="relative h-screen flex items-center justify-center bg-gradient-to-r from-emerald-800 to-emerald-600">
        <div class="absolute inset-0 bg-black/40"></div>
        <img src="{{ asset('images/banner-masjid.webp') }}" alt="Masjid Al-Muhajirin" class="absolute inset-0 w-full h-full object-cover brightness-80">
        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto fade-in">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Masjid Al-Muhajirin</h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">Menyebarkan Cahaya Islam untuk Umat</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-3 rounded-md font-semibold transition-colors flex items-center justify-center">
                    Lihat Program Kami
                    <i data-lucide="arrow-right" class="ml-2 w-5 h-5"></i>
                </button>
                <a href="{{ route('donasi') }}">
                    <button class="bg-amber-500 hover:bg-amber-600 text-white border-amber-500 px-8 py-3 rounded-md font-semibold transition-colors flex items-center justify-center cursor-pointer">
                        Donasi Sekarang
                        <i data-lucide="handshake" class="ml-2 w-5 h-5"></i>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Yayasan Masjid Al-Muhajirin telah berdiri sejak 1985 sebagai pusat kegiatan keagamaan dan sosial masyarakat
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="https://placehold.co/300x200" alt="Sejarah Masjid" class="rounded-lg shadow-lg w-full h-auto">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-emerald-800 mb-6">Sejarah Singkat</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Masjid Al-Muhajirin didirikan pada tahun 1985 oleh sekelompok masyarakat yang memiliki visi untuk menciptakan pusat kegiatan keagamaan yang dapat melayani kebutuhan spiritual dan sosial umat Islam di wilayah ini.
                        </p>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            Selama lebih dari 35 tahun, masjid ini telah menjadi rumah ibadah yang tidak hanya melayani shalat lima waktu, tetapi juga berbagai kegiatan pendidikan, sosial, dan dakwah untuk masyarakat.
                        </p>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-emerald-600">35+</div>
                                <div class="text-gray-600">Tahun Berdiri</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-emerald-600">1000+</div>
                                <div class="text-gray-600">Jamaah Aktif</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visi Misi -->
                <div class="mt-20">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-white p-8 rounded-lg shadow-md border border-emerald-200">
                            <h3 class="text-2xl font-bold text-emerald-800 mb-4">Visi</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Menjadi pusat kegiatan keagamaan dan sosial yang unggul dalam menyebarkan nilai-nilai Islam yang rahmatan lil alamiin untuk kesejahteraan umat dan masyarakat.
                            </p>
                        </div>
                        <div class="bg-white p-8 rounded-lg shadow-md border border-emerald-200">
                            <h3 class="text-2xl font-bold text-emerald-800 mb-4">Misi</h3>
                            <ul class="text-gray-600 space-y-2">
                                <li>• Menyelenggarakan kegiatan ibadah dan dakwah</li>
                                <li>• Memberikan pendidikan agama untuk semua usia</li>
                                <li>• Melakukan kegiatan sosial dan kemanusiaan</li>
                                <li>• Membangun ukhuwah islamiyah yang kuat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program -->
    <section id="program" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Program Kami</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Berbagai program kegiatan yang kami selenggarakan untuk kemajuan umat dan masyarakat
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 group">
                        <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-emerald-200 transition-colors">
                            <i data-lucide="book-open" class="w-6 h-6 text-emerald-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Pendidikan Agama</h3>
                        <p class="text-gray-600 mb-4">
                            TPA/TPQ untuk anak-anak, kajian rutin untuk dewasa, dan madrasah diniyah
                        </p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li>• TPA Sore (16:00-17:30)</li>
                            <li>• Kajian Ahad Pagi</li>
                            <li>• Madrasah Diniyah</li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 group">
                        <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-amber-200 transition-colors">
                            <i data-lucide="heart-handshake" class="w-6 h-6 text-amber-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Kegiatan Sosial</h3>
                        <p class="text-gray-600 mb-4">
                            Program bantuan untuk masyarakat kurang mampu dan kegiatan kemanusiaan
                        </p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li>• Santunan Yatim</li>
                            <li>• Bantuan Fakir Miskin</li>
                            <li>• Ambulans Gratis</li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 group">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                            <i data-lucide="users" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Kegiatan Remaja</h3>
                        <p class="text-gray-600 mb-4">
                            Pembinaan generasi muda melalui berbagai kegiatan positif dan edukatif
                        </p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li>• Remaja Masjid</li>
                            <li>• Pelatihan Keterampilan</li>
                            <li>• Olahraga Bersama</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section id="galeri" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Galeri Kegiatan</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Dokumentasi berbagai kegiatan dan momen berharga di Masjid Al-Muhajirin
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="group cursor-pointer">
                        <img src="https://placehold.co/300x200"
                            alt="Galeri {{ $i }}"
                            class="w-full h-48 object-cover rounded-lg group-hover:scale-105 transition-transform duration-300">
                </div>
                @endfor
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('galeri') }}">
                    <button class="border border-emerald-600 text-emerald-600 hover:bg-emerald-600 hover:text-white px-6 py-2 rounded-md font-medium transition-colors cursor-pointer">
                        Lihat Semua Galeri
                    </button>
                </a>
            </div>
        </div>
</div>
</section>

<!-- Donasi Section -->
<section class="py-20 bg-emerald-600">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Mari Berdonasi untuk Kemajuan Masjid</h2>
            <p class="text-xl mb-8 opacity-90">
                Setiap donasi Anda adalah investasi untuk kemajuan umat dan pahala yang mengalir terus
            </p>

            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white/10 rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-2">Operasional Masjid</h3>
                    <p class="text-sm opacity-80">Listrik, air, kebersihan, dan perawatan masjid</p>
                </div>
                <div class="bg-white/10 rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-2">Program Pendidikan</h3>
                    <p class="text-sm opacity-80">TPA, kajian, dan kegiatan pendidikan agama</p>
                </div>
                <div class="bg-white/10 rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-2">Kegiatan Sosial</h3>
                    <p class="text-sm opacity-80">Bantuan untuk fakir miskin dan yatim piatu</p>
                </div>
            </div>

            <a href="{{ route('donasi') }}">
                <button class="bg-amber-500 hover:bg-amber-600 text-white px-8 py-3 rounded-md font-semibold transition-colors flex items-center justify-center mx-auto cursor-pointer">
                    Donasi Sekarang
                    <i data-lucide="handshake" class="ml-2 w-5 h-5"></i>
                </button>
            </a>
        </div>
    </div>
</section>

<!-- Kontak -->
<section id="kontak" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Jangan ragu untuk menghubungi kami jika ada pertanyaan atau ingin berpartisipasi dalam kegiatan
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="map-pin" class="w-5 h-5 text-emerald-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Alamat</h4>
                                <p class="text-gray-600">Jl. Bukit Cimindi Raya No.8 Blok S, Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="phone" class="w-5 h-5 text-emerald-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Telepon</h4>
                                <p class="text-gray-600">(021) 1234-5678</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="mail" class="w-5 h-5 text-emerald-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email</h4>
                                <p class="text-gray-600">info@almuhajirin.org</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="calendar" class="w-5 h-5 text-emerald-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                                <p class="text-gray-600">Senin - Minggu: 05:00 - 22:00 WIB</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-semibold text-gray-800 mb-4">Ikuti Kami</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                <i data-lucide="facebook" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-pink-600 rounded-lg flex items-center justify-center text-white hover:bg-pink-700 transition-colors">
                                <i data-lucide="instagram" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center text-white hover:bg-red-700 transition-colors">
                                <i data-lucide="youtube" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                    <form action="" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Masukkan nama lengkap Anda">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Masukkan email Anda">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                            <input type="tel" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Masukkan nomor telepon Anda">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                            <textarea name="message" required rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white py-2 px-4 rounded-md font-medium transition-colors">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
@endsection