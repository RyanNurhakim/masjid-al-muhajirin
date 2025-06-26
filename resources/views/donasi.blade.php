@extends('layouts.app')

@section('title', 'Donasi Online - Yayasan Masjid Al-Muhajirin')
@section('description', 'Berdonasi online untuk kemajuan Masjid Al-Muhajirin. Pilih kategori donasi dan metode pembayaran yang mudah dan aman.')

@section('content')
<div class="min-h-screen bg-gray-50" x-data="donasiForm()">

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Progress Steps -->
            <div class="flex items-center justify-center mb-8">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full"
                        :class="step >= 1 ? 'bg-emerald-600 text-white' : 'bg-gray-200 text-gray-500'">
                        1
                    </div>
                    <div class="w-16 h-1" :class="step >= 2 ? 'bg-emerald-600' : 'bg-gray-200'"></div>
                    <div class="flex items-center justify-center w-8 h-8 rounded-full"
                        :class="step >= 2 ? 'bg-emerald-600 text-white' : 'bg-gray-200 text-gray-500'">
                        2
                    </div>
                    <div class="w-16 h-1" :class="step >= 3 ? 'bg-emerald-600' : 'bg-gray-200'"></div>
                    <div class="flex items-center justify-center w-8 h-8 rounded-full"
                        :class="step >= 3 ? 'bg-emerald-600 text-white' : 'bg-gray-200 text-gray-500'">
                        3
                    </div>
                </div>
            </div>

            <!-- Success Page -->
            <div x-show="step === 3" class="flex items-center justify-center p-4">
                <div class="bg-white rounded-lg shadow-md w-full max-w-md text-center p-8">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="check-circle" class="w-8 h-8 text-green-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Donasi Berhasil!</h2>
                    <p class="text-gray-600 mb-6">
                        Terima kasih atas donasi Anda sebesar <span x-text="formatCurrency(getFinalAmount())"></span> untuk
                        <span x-text="getSelectedCategory().title"></span>. Semoga menjadi amal jariyah yang berkah.
                    </p>
                    <div class="space-y-3">
                        <button class="w-full bg-emerald-600 hover:bg-emerald-700 text-white py-2 px-4 rounded-md font-medium transition-colors">
                            Unduh Bukti Donasi
                        </button>
                        <a href="{{ route('home') }}" class="block w-full border border-gray-300 text-gray-700 hover:bg-gray-50 py-2 px-4 rounded-md font-medium transition-colors">
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>

            <div x-show="step < 3" class="grid lg:grid-cols-3 gap-8">
                <!-- Main Form -->
                <div class="lg:col-span-2">
                    <!-- Step 1: Amount Selection -->
                    <div x-show="step === 1" class="bg-white rounded-lg shadow-md">
                        <div class="p-6 border-b">
                            <h2 class="text-xl font-bold flex items-center space-x-2">
                                <i data-lucide="handshake" class="w-6 h-6 text-emerald-600"></i>
                                <span>Pilih Jumlah Donasi</span>
                            </h2>
                        </div>
                        <div class="p-6 space-y-6">
                            <!-- Donation Category -->
                            <div>
                                <label class="text-base font-semibold mb-4 block">Kategori Donasi</label>
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div class="p-4 rounded-lg border-2 cursor-pointer transition-all"
                                        :class="selectedCategory === 'operasional' ? 'border-emerald-500 bg-emerald-50' : 'border-gray-200 hover:border-gray-300'"
                                        @click="selectedCategory = 'operasional'">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center">
                                                <i data-lucide="building" class="w-5 h-5 text-emerald-600"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="font-semibold text-gray-800">Operasional Masjid</h3>
                                                <p class="text-sm text-gray-600">Listrik, air, kebersihan, dan perawatan masjid</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-4 rounded-lg border-2 cursor-pointer transition-all"
                                        :class="selectedCategory === 'pendidikan' ? 'border-emerald-500 bg-emerald-50' : 'border-gray-200 hover:border-gray-300'"
                                        @click="selectedCategory = 'pendidikan'">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                                <i data-lucide="book-open" class="w-5 h-5 text-blue-600"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="font-semibold text-gray-800">Program Pendidikan</h3>
                                                <p class="text-sm text-gray-600">TPA, kajian, dan kegiatan pendidikan agama</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-4 rounded-lg border-2 cursor-pointer transition-all"
                                        :class="selectedCategory === 'sosial' ? 'border-emerald-500 bg-emerald-50' : 'border-gray-200 hover:border-gray-300'"
                                        @click="selectedCategory = 'sosial'">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center">
                                                <i data-lucide="heart-handshake" class="w-5 h-5 text-amber-600"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="font-semibold text-gray-800">Kegiatan Sosial</h3>
                                                <p class="text-sm text-gray-600">Bantuan untuk fakir miskin dan yatim piatu</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-4 rounded-lg border-2 cursor-pointer transition-all"
                                        :class="selectedCategory === 'pembangunan' ? 'border-emerald-500 bg-emerald-50' : 'border-gray-200 hover:border-gray-300'"
                                        @click="selectedCategory = 'pembangunan'">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                                <i data-lucide="users" class="w-5 h-5 text-purple-600"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="font-semibold text-gray-800">Pembangunan</h3>
                                                <p class="text-sm text-gray-600">Renovasi dan pengembangan fasilitas masjid</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Amount Input -->
                            <div>
                                <label class="text-base font-semibold mb-4 block">Jumlah Donasi</label>
                                <div class="relative">
                                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 font-medium">Rp</span>
                                    <input
                                        type="text"
                                        x-model="donationAmount"
                                        @input="formatAmount($event)"
                                        placeholder="0"
                                        class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-lg font-medium">
                                </div>
                                <p class="text-sm text-gray-500 mt-2">Masukkan jumlah donasi yang ingin Anda berikan</p>
                            </div>

                            <button @click="step = 2"
                                :disabled="!donationAmount || parseInt(donationAmount.replace(/\./g, '')) < 1000"
                                :class="(!donationAmount || parseInt(donationAmount.replace(/\./g, '')) < 1000) ? 'bg-gray-400 cursor-not-allowed' : 'bg-emerald-600 hover:bg-emerald-700'"
                                class="w-full text-white py-3 rounded-md font-medium transition-colors">
                                Lanjutkan ke Pembayaran
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Payment Information -->
                    <div x-show="step === 2" class="bg-white rounded-lg shadow-md">
                        <div class="p-6 border-b">
                            <h2 class="text-xl font-bold flex items-center space-x-2">
                                <i data-lucide="credit-card" class="w-6 h-6 text-emerald-600"></i>
                                <span>Informasi Pembayaran</span>
                            </h2>
                        </div>
                        <div class="p-6">
                            <form @submit.prevent="submitDonation" class="space-y-6">
                                <!-- Payment Method -->
                                <div>
                                    <label class="text-base font-semibold mb-4 block">Metode Pembayaran</label>
                                    <div class="space-y-3">
                                        <div class="flex items-center space-x-3 p-4 border rounded-lg cursor-pointer"
                                            :class="paymentMethod === 'transfer' ? 'border-emerald-500 bg-emerald-50' : 'border-gray-200'"
                                            @click="paymentMethod = 'transfer'">
                                            <input type="radio" x-model="paymentMethod" value="transfer" class="text-emerald-600">
                                            <i data-lucide="banknote" class="w-6 h-6 text-gray-600"></i>
                                            <div class="flex-1">
                                                <div class="font-medium">Transfer Bank</div>
                                                <p class="text-sm text-gray-500">BCA, Mandiri, BRI, BNI</p>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-3 p-4 border rounded-lg cursor-pointer"
                                            :class="paymentMethod === 'ewallet' ? 'border-emerald-500 bg-emerald-50' : 'border-gray-200'"
                                            @click="paymentMethod = 'ewallet'">
                                            <input type="radio" x-model="paymentMethod" value="ewallet" class="text-emerald-600">
                                            <i data-lucide="smartphone" class="w-6 h-6 text-gray-600"></i>
                                            <div class="flex-1">
                                                <div class="font-medium">E-Wallet</div>
                                                <p class="text-sm text-gray-500">GoPay, OVO, DANA, ShopeePay</p>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-3 p-4 border rounded-lg cursor-pointer"
                                            :class="paymentMethod === 'qris' ? 'border-emerald-500 bg-emerald-50' : 'border-gray-200'"
                                            @click="paymentMethod = 'qris'">
                                            <input type="radio" x-model="paymentMethod" value="qris" class="text-emerald-600">
                                            <i data-lucide="credit-card" class="w-6 h-6 text-gray-600"></i>
                                            <div class="flex-1">
                                                <div class="font-medium">QRIS</div>
                                                <p class="text-sm text-gray-500">Scan QR Code untuk pembayaran</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Donor Information -->
                                <div>
                                    <label class="text-base font-semibold mb-4 block">Informasi Donatur</label>
                                    <div class="space-y-4">
                                        <div class="flex items-center space-x-2">
                                            <input type="checkbox" x-model="isAnonymous" class="rounded text-emerald-600">
                                            <label class="text-sm">Donasi sebagai Anonim</label>
                                        </div>

                                        <div x-show="!isAnonymous" class="space-y-4">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                                <input type="text" x-model="donorName" placeholder="Masukkan nama lengkap" required
                                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                                <input type="email" x-model="donorEmail" placeholder="Masukkan email" required
                                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                                                <input type="tel" x-model="donorPhone" placeholder="Masukkan nomor telepon"
                                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Pesan (Opsional)</label>
                                            <textarea x-model="donorMessage" placeholder="Tulis pesan atau doa untuk masjid..." rows="3"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex space-x-4">
                                    <button type="button" @click="step = 1"
                                        class="flex-1 border border-gray-300 text-gray-700 hover:bg-gray-50 py-2 px-4 rounded-md font-medium transition-colors">
                                        Kembali
                                    </button>
                                    <button type="submit"
                                        class="flex-1 bg-emerald-600 hover:bg-emerald-700 text-white py-2 px-4 rounded-md font-medium transition-colors">
                                        Bayar Sekarang
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Donation Summary -->
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="p-4 border-b">
                            <h3 class="text-lg font-bold">Ringkasan Donasi</h3>
                        </div>
                        <div class="p-4 space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kategori:</span>
                                <span class="font-medium" x-text="getSelectedCategory().title"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Jumlah:</span>
                                <span class="font-bold text-lg text-emerald-600" x-text="formatCurrency(getFinalAmount())"></span>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex items-center space-x-2 text-sm text-gray-600">
                                    <i data-lucide="shield" class="w-4 h-4"></i>
                                    <span>Transaksi aman dan terpercaya</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Donors
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="p-4 border-b">
                            <h3 class="text-lg font-bold">Donatur Terbaru</h3>
                        </div>
                        <div class="p-4">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between py-2">
                                    <div>
                                        <p class="font-medium text-sm">Ahmad S.</p>
                                        <p class="text-xs text-gray-500">2 menit lalu</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-semibold text-emerald-600 text-sm">Rp 500.000</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-2">
                                    <div>
                                        <p class="font-medium text-sm">Siti M.</p>
                                        <p class="text-xs text-gray-500">15 menit lalu</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-semibold text-emerald-600 text-sm">Rp 250.000</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-2">
                                    <div>
                                        <p class="font-medium text-sm">Anonim</p>
                                        <p class="text-xs text-gray-500">1 jam lalu</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-semibold text-emerald-600 text-sm">Rp 100.000</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-2">
                                    <div>
                                        <p class="font-medium text-sm">Budi P.</p>
                                        <p class="text-xs text-gray-500">2 jam lalu</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-semibold text-emerald-600 text-sm">Rp 1.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Impact Stats
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="p-4 border-b">
                            <h3 class="text-lg font-bold">Dampak Donasi</h3>
                        </div>
                        <div class="p-4">
                            <div class="space-y-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-emerald-600">Rp 125.5 Juta</div>
                                    <div class="text-sm text-gray-600">Terkumpul bulan ini</div>
                                </div>
                                <div class="grid grid-cols-2 gap-4 text-center">
                                    <div>
                                        <div class="text-lg font-bold text-blue-600">1,234</div>
                                        <div class="text-xs text-gray-600">Donatur</div>
                                    </div>
                                    <div>
                                        <div class="text-lg font-bold text-amber-600">567</div>
                                        <div class="text-xs text-gray-600">Penerima Bantuan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Trust Indicators -->
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="p-4">
                            <div class="flex items-center space-x-2 mb-3">
                                <i data-lucide="star" class="w-5 h-5 text-yellow-500"></i>
                                <span class="font-semibold">Terpercaya</span>
                            </div>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li>✓ Laporan keuangan transparan</li>
                                <li>✓ Sertifikat resmi yayasan</li>
                                <li>✓ Bukti penggunaan dana</li>
                                <li>✓ 35+ tahun melayani umat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function donasiForm() {
        return {
            step: 1,
            donationAmount: '',
            selectedCategory: 'operasional',
            paymentMethod: 'transfer',
            isAnonymous: false,
            donorName: '',
            donorEmail: '',
            donorPhone: '',
            donorMessage: '',

            categories: {
                'operasional': {
                    title: 'Operasional Masjid',
                    description: 'Listrik, air, kebersihan, dan perawatan masjid'
                },
                'pendidikan': {
                    title: 'Program Pendidikan',
                    description: 'TPA, kajian, dan kegiatan pendidikan agama'
                },
                'sosial': {
                    title: 'Kegiatan Sosial',
                    description: 'Bantuan untuk fakir miskin dan yatim piatu'
                },
                'pembangunan': {
                    title: 'Pembangunan',
                    description: 'Renovasi dan pengembangan fasilitas masjid'
                }
            },

            formatAmount(event) {
                let value = event.target.value.replace(/\D/g, '');
                if (value) {
                    value = parseInt(value).toLocaleString('id-ID');
                }
                this.donationAmount = value;
                event.target.value = value;
            },

            getSelectedCategory() {
                return this.categories[this.selectedCategory] || this.categories.operasional;
            },

            getFinalAmount() {
                return this.donationAmount.replace(/\./g, '');
            },

            formatCurrency(amount) {
                if (!amount) return 'Rp 0';
                const numericAmount = typeof amount === 'string' ? parseInt(amount.replace(/\./g, '')) : parseInt(amount);
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(numericAmount);
            },

            submitDonation() {
                // Simulate payment processing
                setTimeout(() => {
                    this.step = 3;
                }, 1000);
            }
        }
    }
</script>
@endsection