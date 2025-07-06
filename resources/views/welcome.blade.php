@extends('layouts.app')

@section('title', 'Beranda - Masjid Al-Muhajirin')
@section('description',
    'Masjid Al-Muhajirin - Menyebarkan Cahaya Islam untuk Umat. Program pendidikan, sosial, dan
    kegiatan keagamaan sejak 1985.')

    <?php
    $about_mosque = [
        'history' => 'Masjid Al-Muhajirin didirikan pada tahun .... oleh sekelompok masyarakat yang memiliki visi untuk menciptakan pusat kegiatan keagamaan yang dapat melayani kebutuhan spiritual dan sosial umat Islam di wilayah ini.<br><br>Selama lebih dari ... tahun, masjid ini telah menjadi rumah ibadah yang tidak hanya untuk menunaikan shalat lima waktu, tetapi juga melayani berbagai kegiatan pendidikan, sosial, ibadah dan dakwah untuk masyarakat.',
        'visi' => 'Sebagai pusat pembinaan umat dan layanan sosial berbasis Islam sesuai Al-Qur’an dan As-Sunnah dalam rangka mewujudkan Islam rahmatan lil ‘alamiin.',
        'misi' => ['Menegakkan peribadatan sesuai dengan perintah Allah SWT dan contoh Rasulullah saw;', 'Menyelenggarakan layanan ibadah keagamaan, pendidikan, sosial dan kemanusiaan sesuai dengan ajaran Islam;', 'Meningkatkan kualitas SDM dalam rangka mewujudkan “khairu ummah” (beriman, berilmu, beramal, bertaqwa);', 'Mendorong terciptanya lingkungan masjid yang islami;', 'Mendorong terwujudnya kemandirian ekonomi umat.'],
        'address' => 'Komplek Bukit Cimindi Raya Blok S No.8, Kel. Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514.',
        'phone_number' => '(+62) 812-3456-7890',
        'email' => 'ymambcr@gmail.com',
    ];

    $programs = [
        [
            'icon' => 'book-open',
            'color' => 'emerald',
            'title' => 'Ibadah & Dakwah',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, possimus?',
            'activity' => ['Kajian Kamis Pagi (09:00-11:30)', 'Kajian Jumat Malam (19:30-21:00)', 'Kajian Ahad Pagi (05:00-06:30)'],
        ],
        [
            'icon' => 'book',
            'color' => 'purple',
            'title' => 'Pendidikan Agama',
            'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, iste!',
            'activity' => ['TPA Sore (16:00-17:30)'],
        ],
        [
            'icon' => 'heart-handshake',
            'color' => 'amber',
            'title' => 'Kegiatan Sosial',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, architecto',
            'activity' => ['Santunan Yatim / Anak Asuh', 'Layanan Ambulans Gratis'],
        ],
        [
            'icon' => 'users',
            'color' => 'blue',
            'title' => 'Kegiatan Remaja',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, eos!',
            'activity' => ['Remaja Masjid', 'Pelatihan Keterampilan', 'Olahraga Bersama'],
        ],
        [
            'icon' => 'landmark',
            'color' => 'gray',
            'title' => 'Pemulasaraan Jenazah & Pemakaman',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, eos!',
            'activity' => ['Layanan Pemulasaraan Jenazah', 'Layanan Pemakaman'],
        ],
    ];

    $galeri = [
        [
            'title' => 'Qurban 1446 H / 2025 M',
            'category' => 'ibadah_dakwah',
            'date' => '2024-12-15',
            'image' => '/images/qurban2.jpg',
            'description' => 'Pelaksanaan pemotongan hewan qurban oleh ketua yayasan.',
        ],
        [
            'title' => 'Kajian Kamis Pagi',
            'category' => 'ibadah_dakwah',
            'date' => '2024-04-10',
            'image' => '/images/kajian-kamis-pagi-1.jpg',
            'description' => 'Kegiatan kajian kamis pagi',
        ],
        [
            'title' => 'TPA Sore - Pembelajaran Al-Quran',
            'category' => 'pendidikan_agama',
            'date' => '2024-11-20',
            'image' => '/images/tpa-1.jpg',
            'description' => 'Kegiatan pembelajaran Al-Quran untuk anak-anak di TPA sore',
        ],
        [
            'title' => 'Layanan Ambulance Gratis',
            'category' => 'kegiatan_sosial',
            'date' => '2024-10-25',
            'image' => '/images/layanan-ambulance-1.jpg',
            'description' => 'Layanan ambulance gratis 24 jam',
        ],
        [
            'title' => 'Pemakaman Al-Muhajirin',
            'category' => 'pemakaman',
            'date' => '2024-12-08',
            'image' => '/images/pemakaman-1.jpg',
            'description' => 'Lokasi Pemakaman Al-Muhajirin',
        ],
    ];

    $penggunaan_infaq = [
        [
            'title' => 'Operasional Masjid',
            'desc' => 'Listrik, air, kebersihan, dan perawatan masjid',
        ],
        [
            'title' => 'Pendidikan',
            'desc' => 'Pemenuhan kebutuhan untuk kegiatan belajar dan mengajar',
        ],
        [
            'title' => 'Sosial',
            'desc' => 'Bantuan untuk fakir miskin dan yatim piatu',
        ],
    ];
    ?>

@section('content')
    <div class="min-h-screen bg-white scroll-smooth">
        <!-- Hero Section -->
        <section id="beranda"
            class="relative h-screen flex items-center justify-center bg-gradient-to-r from-emerald-800 to-emerald-600 transition-all duration-1000 ease-out">
            <img src="{{ asset('images/banner-masjid.webp') }}" alt="Masjid Al-Muhajirin"
                class="absolute inset-0 w-full h-full object-cover brightness-80 transition-all duration-1000 ease-out">
            <div class="absolute inset-0 bg-black/30"></div>
            <div
                class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto opacity-0 translate-y-10 animate-fade-in-up">
                <h1 class="text-3xl md:text-6xl font-bold mb-6 transform transition-all duration-1000 delay-300 ease-out">
                    Masjid Al-Muhajirin</h1>
                <p class="text-xl md:text-2xl mb-8 opacity-90 transform transition-all duration-1000 delay-500 ease-out">
                    Menyebarkan Cahaya Islam untuk Umat</p>
                <div
                    class="flex flex-col sm:flex-row gap-4 justify-center transform transition-all duration-1000 delay-700 ease-out">
                    <a href="{{ route('home') }}#program" class="transform transition-all duration-300 hover:scale-105">
                        <button
                            class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-3 rounded-md font-semibold transition-all duration-300 flex items-center justify-center cursor-pointer hover:shadow-lg">
                            Lihat Program Kami
                            <i data-lucide="arrow-right"
                                class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </button>
                    </a>
                    <a href="{{ route('donasi') }}" class="transform transition-all duration-300 hover:scale-105">
                        <button
                            class="bg-amber-500 hover:bg-amber-600 text-white border-amber-500 px-8 py-3 rounded-md font-semibold transition-all duration-300 flex items-center justify-center cursor-pointer hover:shadow-lg">
                            Infaq & Shodaqoh
                            <i data-lucide="handshake"
                                class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:scale-110"></i>
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <!-- Tentang Kami -->
        <section id="tentang" class="py-20 bg-gray-50 opacity-0 translate-y-10 transition-all duration-1000 ease-out"
            data-animate="fadeInUp">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-16 opacity-0 translate-y-10 transition-all duration-1000 delay-200 ease-out"
                        data-animate="fadeInUp">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            Masjid Al-Muhajirin telah berdiri sejak .... sebagai pusat kegiatan keagamaan dan sosial
                            masyarakat
                        </p>
                    </div>

                    <!-- Sejarah Singkat -->
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="opacity-0 -translate-x-10 transition-all duration-1000 delay-400 ease-out"
                            data-animate="fadeInLeft">
                            <img src="https://placehold.co/300x200" alt="Sejarah Masjid"
                                class="rounded-lg shadow-lg w-full h-auto hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="opacity-0 translate-x-10 transition-all duration-1000 delay-600 ease-out"
                            data-animate="fadeInRight">
                            <h3 class="text-2xl font-bold text-emerald-800 mb-6">Sejarah Singkat</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                {!! $about_mosque['history'] !!}
                            </p>
                        </div>
                    </div>

                    <!-- Visi Misi -->
                    <div class="mt-20 opacity-0 translate-y-10 transition-all duration-1000 delay-800 ease-out"
                        data-animate="fadeInUp">
                        <div class="grid md:grid-cols-2 gap-8">
                            <div
                                class="bg-white p-8 rounded-lg shadow-md border border-emerald-200 hover:shadow-lg transition-all duration-300 hover:-translate-y-2">
                                <h3 class="text-2xl font-bold text-emerald-800 mb-4">Visi</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ $about_mosque['visi'] }}
                                </p>
                            </div>
                            <div
                                class="bg-white p-8 rounded-lg shadow-md border border-emerald-200 hover:shadow-lg transition-all duration-300 hover:-translate-y-2">
                                <h3 class="text-2xl font-bold text-emerald-800 mb-4">Misi</h3>
                                <ul class="text-gray-600 space-y-2">
                                    @foreach ($about_mosque['misi'] as $misi)
                                        <li>• {{ $misi }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Program -->
        <section id="program" class="py-20 bg-white opacity-0 translate-y-10 transition-all duration-1000 ease-out"
            data-animate="fadeInUp">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-16 opacity-0 translate-y-10 transition-all duration-1000 delay-200 ease-out"
                        data-animate="fadeInUp">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Program Kami</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            Berbagai program kegiatan yang kami selenggarakan untuk kemajuan umat dan masyarakat
                        </p>
                    </div>

                    <div class="grid md:grid-cols-5 gap-8">
                        @foreach ($programs as $index => $program)
                            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 opacity-0 translate-y-10 ease-out"
                                data-animate="fadeInUp" style="animation-delay: {{ ($index + 1) * 100 }}ms;">
                                <div
                                    class="w-12 h-12 bg-<?= $program['color'] ?>-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-<?= $program['color'] ?>-200 transition-all duration-300 group-hover:scale-110">
                                    <i data-lucide="<?= $program['icon'] ?>"
                                        class="w-6 h-6 text-<?= $program['color'] ?>-600 transition-transform duration-300 group-hover:scale-110"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3"><?= $program['title'] ?></h3>
                                <p class="text-gray-600 mb-4">
                                    <?= $program['desc'] ?>
                                </p>
                                <ul class="text-sm text-gray-500 space-y-1">
                                    @foreach ($program['activity'] as $activity)
                                        <li>• <?= $activity ?></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Galeri -->
        <section id="galeri" class="py-20 bg-gray-50 opacity-0 translate-y-10 transition-all duration-1000 ease-out"
            data-animate="fadeInUp">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-16 opacity-0 translate-y-10 transition-all duration-1000 delay-200 ease-out"
                        data-animate="fadeInUp">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Galeri Kegiatan</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            Dokumentasi berbagai kegiatan dan momen berharga di Masjid Al-Muhajirin
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 opacity-0 translate-y-10 transition-all duration-1000 delay-400 ease-out"
                        data-animate="fadeInUp">
                        @foreach ($galeri as $index => $item)
                            <div class="group cursor-pointer overflow-hidden rounded-lg transform transition-all duration-300 hover:scale-105 hover:shadow-lg opacity-0 translate-y-5"
                                data-animate="fadeInUp" style="animation-delay: {{ ($index + 1) * 100 }}ms;">
                                <img src="{{ $item['image'] }}" alt=""
                                    class="w-full h-48 object-cover rounded-lg group-hover:scale-110 transition-transform duration-500">
                            </div>
                        @endforeach
                    </div>

                    <div class="text-center mt-8 opacity-0 translate-y-10 transition-all duration-1000 delay-600 ease-out"
                        data-animate="fadeInUp">
                        <a href="{{ route('galeri') }}"
                            class="inline-block transform transition-all duration-300 hover:scale-105">
                            <button
                                class="border border-emerald-600 text-emerald-600 hover:bg-emerald-600 hover:text-white px-6 py-2 rounded-md font-medium transition-all duration-300 cursor-pointer hover:shadow-lg">
                                Lihat Semua Galeri
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Donasi Section -->
        <section class="py-20 bg-emerald-600 opacity-0 translate-y-10 transition-all duration-1000 ease-out"
            data-animate="fadeInUp">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center text-white">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 opacity-0 translate-y-10 transition-all duration-1000 delay-200 ease-out"
                        data-animate="fadeInUp">Siapkan Infaq & Shodaqoh Terbaik Anda Untuk Kemajuan
                        Masjid</h2>
                    <p class="text-xl mb-8 opacity-90 opacity-0 translate-y-10 transition-all duration-1000 delay-400 ease-out"
                        data-animate="fadeInUp">
                        Setiap infaq & shodaqoh Anda adalah investasi untuk kemajuan umat dan pahala yang mengalir terus
                    </p>

                    <div class="grid md:grid-cols-3 gap-6 mb-8 opacity-0 translate-y-10 transition-all duration-1000 delay-600 ease-out"
                        data-animate="fadeInUp">
                        @foreach ($penggunaan_infaq as $index => $item)
                            <div class="bg-white/10 rounded-lg p-6 transform transition-all duration-300 hover:bg-white/20 hover:scale-105 opacity-0 translate-y-5"
                                data-animate="fadeInUp" style="animation-delay: {{ ($index + 1) * 100 + 600 }}ms;">
                                <h3 class="text-lg font-semibold mb-2">{{ $item['title'] }}</h3>
                                <p class="text-sm opacity-80">{{ $item['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <a href="{{ route('donasi') }}"
                        class="inline-block transform transition-all duration-300 hover:scale-105 opacity-0 translate-y-10 transition-all duration-1000 delay-800 ease-out"
                        data-animate="fadeInUp">
                        <button
                            class="bg-amber-500 hover:bg-amber-600 text-white px-8 py-3 rounded-md font-semibold transition-all duration-300 flex items-center justify-center mx-auto cursor-pointer hover:shadow-lg">
                            Infaq & Shodaqoh
                            <i data-lucide="handshake"
                                class="ml-2 w-5 h-5 transition-transform duration-300 group-hover:scale-110"></i>
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <!-- Kontak -->
        <section id="kontak" class="py-20 bg-white opacity-0 translate-y-10 transition-all duration-1000 ease-out"
            data-animate="fadeInUp">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-16 opacity-0 translate-y-10 transition-all duration-1000 delay-200 ease-out"
                        data-animate="fadeInUp">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            Jangan ragu untuk menghubungi kami jika ada pertanyaan atau ingin berpartisipasi dalam kegiatan
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-12">
                        <div class="opacity-0 -translate-x-10 transition-all duration-1000 delay-400 ease-out"
                            data-animate="fadeInLeft">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>

                            <div class="space-y-6">
                                <div
                                    class="flex items-start space-x-4 transform transition-all duration-300 hover:translate-x-2">
                                    <div
                                        class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0 transition-all duration-300 hover:bg-emerald-200 hover:scale-110">
                                        <i data-lucide="map-pin" class="w-5 h-5 text-emerald-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Alamat</h4>
                                        <p class="text-gray-600">{{ $about_mosque['address'] }}</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start space-x-4 transform transition-all duration-300 hover:translate-x-2">
                                    <div
                                        class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0 transition-all duration-300 hover:bg-emerald-200 hover:scale-110">
                                        <i data-lucide="phone" class="w-5 h-5 text-emerald-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Telepon</h4>
                                        <p class="text-gray-600">{{ $about_mosque['phone_number'] }}</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start space-x-4 transform transition-all duration-300 hover:translate-x-2">
                                    <div
                                        class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0 transition-all duration-300 hover:bg-emerald-200 hover:scale-110">
                                        <i data-lucide="mail" class="w-5 h-5 text-emerald-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Email</h4>
                                        <p class="text-gray-600">{{ $about_mosque['email'] }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <h4 class="font-semibold text-gray-800 mb-4">Ikuti Kami</h4>
                                <div class="flex space-x-4">
                                    <a href="#"
                                        class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                        <i data-lucide="facebook" class="w-5 h-5"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-pink-600 rounded-lg flex items-center justify-center text-white hover:bg-pink-700 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                        <i data-lucide="instagram" class="w-5 h-5"></i>
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center text-white hover:bg-red-700 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                                        <i data-lucide="youtube" class="w-5 h-5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="opacity-0 translate-x-10 transition-all duration-1000 delay-600 ease-out"
                            data-animate="fadeInRight">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                            <form action="" method="POST" class="space-y-6">
                                @csrf
                                <div class="">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                    <input type="text" name="name" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300 hover:shadow-md focus:shadow-lg"
                                        placeholder="Masukkan nama lengkap Anda">
                                </div>
                                <div class="">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" name="email" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300 hover:shadow-md focus:shadow-lg"
                                        placeholder="Masukkan email Anda">
                                </div>
                                <div class="">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                                    <input type="tel" name="phone"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300 hover:shadow-md focus:shadow-lg"
                                        placeholder="Masukkan nomor telepon Anda">
                                </div>
                                <div class="">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                                    <textarea name="message" required rows="4"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300 hover:shadow-md focus:shadow-lg"
                                        placeholder="Tulis pesan Anda di sini..."></textarea>
                                </div>
                                <button type="submit"
                                    class="w-full bg-emerald-600 hover:bg-emerald-700 text-white py-2 px-4 rounded-md font-medium transition-all duration-300 hover:shadow-lg hover:scale-105">
                                    Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JavaScript untuk Smooth Scroll Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll untuk navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Intersection Observer untuk animasi scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-10',
                            'translate-y-5', '-translate-x-10', 'translate-x-10');
                        entry.target.classList.add('opacity-100', 'translate-y-0', 'translate-x-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe semua elemen dengan data-animate
            document.querySelectorAll('[data-animate]').forEach(el => {
                observer.observe(el);
            });

            // Auto-animate hero section
            setTimeout(() => {
                const heroContent = document.querySelector('.animate-fade-in-up');
                if (heroContent) {
                    heroContent.classList.remove('opacity-0', 'translate-y-10');
                    heroContent.classList.add('opacity-100', 'translate-y-0');
                }
            }, 500);
        });
    </script>
@endsection
