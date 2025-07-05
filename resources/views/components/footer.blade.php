<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center">
                            <i data-lucide="university" class="w-6 h-6 text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold">Masjid Al-Muhajirin</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Menyebarkan cahaya Islam untuk kemajuan umat dan masyarakat sejak ....
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Menu Utama</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#beranda" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#tentang" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#program" class="hover:text-white transition-colors">Program</a></li>
                        <li><a href="#galeri" class="hover:text-white transition-colors">Galeri</a></li>
                    </ul>
                </div>

                <?php
                $programs = [['title' => 'Ibadah & Dakwah'], ['title' => 'Pendidikan Agama'], ['title' => 'Kegiatan Sosial'], ['title' => 'Kegiatan Remaja'], ['title' => 'Pemulasaraan Jenazah & Pemakaman']];
                ?>

                <div>
                    <h4 class="font-semibold mb-4">Program</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        @foreach ($programs as $item)
                            <li>{{ $item['title'] }}</li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>Komplek Bukit Cimindi Raya Blok S No.8, Kel. Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi,
                            Jawa Barat 40514.</li>
                        <li>(022) 1234-5678</li>
                        <li>ymambcr@gmail.com</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} Masjid Al-Muhajirin. Semua hak dilindungi.</p>
            </div>
        </div>
    </div>
</footer>
