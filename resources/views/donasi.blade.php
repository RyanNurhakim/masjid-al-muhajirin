@extends('layouts.app')

@section('title', 'Infaq & Shodaqoh Online - Masjid Al-Muhajirin')
@section('description',
    'Infaq & Shodaqoh online untuk kemajuan Masjid Al-Muhajirin. Pilih metode
    pembayaran yang mudah dan aman.')

    @php
        $donationSteps = [
            [
                'id' => 1,
                'title' => 'Pilih Rekening Tujuan',
                'description' => 'Pilih salah satu rekening bank yang tersedia.',
            ],
            [
                'id' => 2,
                'title' => 'Transfer Infaq & Shodaqoh',
                'description' => 'Transfer dana secara mandiri ke rekening yang dipilih.',
            ],
            [
                'id' => 3,
                'title' => 'Upload Bukti Transfer',
                'description' => 'Upload bukti transfer Anda untuk verifikasi.',
            ],
            [
                'id' => 4,
                'title' => 'Selesai',
                'description' => 'Infaq & Shodaqoh Anda akan diverifikasi dalam 1x24 jam.',
            ],
        ];

        $bankAccounts = [
            [
                'bank' => 'Bank Syariah Indonesia (BSI)',
                'account' => '7707701007',
                'name' => 'Yayasan MASJID AL MUHAJIRIN BCR',
                'icon' => '💳',
            ],
        ];
    @endphp

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100">

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Form Donasi -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Langkah Donasi -->
                    <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6">
                        <h2 class="text-lg sm:text-xl font-bold text-slate-900 mb-4 sm:mb-6">Tata Cara Infaq & Shodaqoh</h2>
                        <div class="space-y-3 sm:space-y-4">
                            @foreach ($donationSteps as $step)
                                <div class="flex items-start space-x-3 sm:space-x-4">
                                    <div
                                        class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-emerald-600 flex items-center justify-center text-sm font-semibold text-white flex-shrink-0">
                                        {{ $step['id'] }}
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="font-semibold text-black text-sm sm:text-base">{{ $step['title'] }}</h3>
                                        <p class="text-xs sm:text-sm text-slate-400 mt-1">{{ $step['description'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Rekening Bank -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center space-x-2">
                            <i data-lucide="credit-card" class="h-5 w-5 text-emerald-600"></i>
                            <span>Nomor Rekening Infaq & Shodaqoh</span>
                        </h2>
                        <div class="grid md:grid-cols-1 gap-4">
                            @foreach ($bankAccounts as $bank)
                                <div
                                    class="p-4 rounded-xl border-2 border-slate-200 hover:border-slate-300 cursor-pointer transition-all duration-300">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center space-x-3">
                                            <span class="text-2xl">{{ $bank['icon'] }}</span>
                                            <div>
                                                <h3 class="font-semibold text-slate-900">{{ $bank['bank'] }}</h3>
                                                <p class="text-sm text-slate-600">{{ $bank['name'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between bg-slate-50 rounded-lg p-3">
                                        <span
                                            class="font-mono text-lg font-bold text-slate-900">{{ $bank['account'] }}</span>
                                        <button class="p-2 hover:bg-slate-200 rounded-lg transition-colors copy-btn"
                                            data-copy-text="7707701007">
                                            <i data-lucide="copy" class="h-4 w-4 text-slate-600"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Informasi Donatur -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center space-x-2">
                            <i data-lucide="image-up" class="h-5 w-5 text-emerald-600"></i>
                            <span>Upload Bukti</span>
                        </h2>
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf

                            <!-- Upload Bukti -->
                            <div class="mt-6">
                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 border-emerald-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                fill="none" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5
                                                                                                                        5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5
                                                                                                                        5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                                <span class="font-semibold">Klik untuk unggah</span> atau seret dan lepas
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG atau GIF
                                                (maks. 800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" name="bukti" type="file" accept="image/*"
                                            class="hidden" required />
                                    </label>
                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="mt-6">
                                <button type="submit"
                                    class="w-full py-4 bg-emerald-600 text-white rounded-xl font-semibold text-lg hover:bg-emerald-700 transition-all">
                                    Upload
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Trust Indicators -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <i data-lucide="star" class="w-5 h-5 text-yellow-500"></i>
                            <span class="font-semibold">Terpercaya</span>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>✓ Laporan keuangan transparan</li>
                            <li>✓ Sertifikat resmi yayasan</li>
                            <li>✓ Bukti penggunaan dana</li>
                        </ul>
                    </div>

                    <!-- Info Kontak -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Butuh Bantuan?</h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex items-center space-x-2">
                                <i data-lucide="phone" class="h-4 w-4 text-slate-400"></i>
                                <span class="text-slate-600">+62 812-3456-7890</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i data-lucide="mail" class="h-4 w-4 text-slate-400"></i>
                                <span class="text-slate-600">ymambcr@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.copy-btn').forEach(function(button) {
                button.addEventListener('click', function() {
                    const textToCopy = this.getAttribute('data-copy-text');
                    navigator.clipboard.writeText(textToCopy).then(() => {
                        // Optional: tampilkan notifikasi atau ubah icon
                        this.innerHTML =
                            '<i data-lucide="check" class="h-4 w-4 text-emerald-600"></i>';
                        lucide.createIcons();

                        setTimeout(() => {
                            this.innerHTML =
                                '<i data-lucide="copy" class="h-4 w-4 text-slate-600"></i>';
                            lucide.createIcons();
                        }, 1500);
                    });
                });
            });
        });
    </script>

@endsection
