@extends('layouts.admin')

@section('title', 'Informasi Masjid')
@section('page-title', 'Informasi Masjid')

<?php
$about_mosque = [
    'history' => 'Masjid Al-Muhajirin didirikan pada tahun .... oleh sekelompok masyarakat yang memiliki visi untuk menciptakan pusat kegiatan keagamaan yang dapat melayani kebutuhan spiritual dan sosial umat Islam di wilayah ini.<br><br>Selama lebih dari ... tahun, masjid ini telah menjadi rumah ibadah yang tidak hanya melayani shalat lima waktu, tetapi juga berbagai kegiatan pendidikan, sosial, dan dakwah untuk masyarakat.',
    'visi' => 'Sebagai pusat pembinaan umat dan layanan sosial berbasis Islam sesuai Al-Qur’an dan As-Sunnah dalam rangka mewujudkan Islam rahmatan lil ‘alamiin.',
    'misi' => ['Menegakkan peribadatan sesuai dengan perintah Allah SWT dan contoh Rasulullah saw;', 'Menyelenggarakan layanan ibadah keagamaan, pendidikan, sosial dan kemanusiaan sesuai dengan ajaran Islam;', 'Meningkatkan kualitas SDM dalam rangka mewujudkan “khairu ummah” (beriman, berilmu, beramal, bertaqwa);', 'Mendorong terciptanya lingkungan masjid yang islami;', 'Mendorong terwujudnya kemandirian ekonomi umat.'],
    'address' => 'Komplek Bukit Cimindi Raya Blok S No.8, Kel. Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514.',
    'phone_number' => '(+62) 812-3456-7890',
    'email' => 'ymambcr@gmail.com',
];
?>
@section('content')
    <div x-data="aboutMasjid()" class="bg-white rounded-lg shadow-md p-6 max-w-5xl mx-auto space-y-8">
        <!-- Sejarah -->
        <div>
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-emerald-700">Sejarah</h2>
                <button @click="openModal('history')" class="text-sm text-emerald-600 hover:underline">Edit</button>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed mt-2" x-html="data.history"></p>
        </div>

        <!-- Visi -->
        <div>
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-emerald-700">Visi</h2>
                <button @click="openModal('visi')" class="text-sm text-emerald-600 hover:underline">Edit</button>
            </div>
            <p class="text-sm text-slate-700 italic mt-2" x-text="data.visi"></p>
        </div>

        <!-- Misi -->
        <div>
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-emerald-700">Misi</h2>
                <button @click="openModal('misi')" class="text-sm text-emerald-600 hover:underline">Edit</button>
            </div>
            <ul class="list-disc list-inside text-sm text-slate-700 mt-2 space-y-1">
                <template x-for="point in data.misi" :key="point">
                    <li x-text="point"></li>
                </template>
            </ul>
        </div>

        <!-- Kontak -->
        <div>
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-emerald-700">Kontak & Alamat</h2>
                <button @click="openModal('kontak')" class="text-sm text-emerald-600 hover:underline">Edit</button>
            </div>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-slate-700 mt-2">
                <div>
                    <p><span class="font-medium">Alamat:</span> <span x-text="data.address"></span></p>
                    <p><span class="font-medium">Telepon:</span> <span x-text="data.phone_number"></span></p>
                </div>
                <div>
                    <p><span class="font-medium">Email:</span> <span x-text="data.email"></span></p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div x-show="showModal" x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
            @click.away="showModal = false">
            <div class="bg-white rounded-lg shadow-xl w-full max-w-xl p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold text-slate-800" x-text="'Edit ' + modalTitle"></h2>
                    <button @click="showModal = false" class="text-gray-500 hover:text-gray-700">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>

                <!-- Form -->
                <template x-if="modalKey === 'history' || modalKey === 'visi'">
                    <textarea x-model="tempValue" rows="6" class="w-full border rounded p-2 text-sm"></textarea>
                </template>

                <template x-if="modalKey === 'misi'">
                    <textarea x-model="tempValue" rows="8" placeholder="Pisahkan poin misi dengan titik koma (;)"
                        class="w-full border rounded p-2 text-sm"></textarea>
                </template>

                <template x-if="modalKey === 'kontak'">
                    <div class="grid gap-3">
                        <div>
                            <span class="block text-sm text-gray-700 font-medium mb-1">Alamat</span>
                            <input type="text" x-model="tempValueAddress" placeholder="Alamat"
                                class="w-full border rounded p-2 text-sm focus:ring-emerald-500 focus:border-emerald-500">
                        </div>
                        <div>
                            <span class="block text-sm text-gray-700 font-medium mb-1">No. Telepon</span>
                            <input type="text" x-model="tempValuePhone" placeholder="No. Telepon"
                                class="w-full border rounded p-2 text-sm focus:ring-emerald-500 focus:border-emerald-500">
                        </div>
                        <div>
                            <span class="block text-sm text-gray-700 font-medium mb-1">Email</span>
                            <input type="email" x-model="tempValueEmail" placeholder="Email"
                                class="w-full border rounded p-2 text-sm focus:ring-emerald-500 focus:border-emerald-500">
                        </div>
                    </div>
                </template>

                <div class="mt-4 flex justify-end space-x-2">
                    <button @click="showModal = false"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Batal</button>
                    <button @click="saveChanges"
                        class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function aboutMasjid() {
            return {
                data: {
                    history: `{!! $about_mosque['history'] !!}`,
                    visi: `{{ $about_mosque['visi'] }}`,
                    misi: @json($about_mosque['misi']),
                    address: `{{ $about_mosque['address'] }}`,
                    phone_number: `{{ $about_mosque['phone_number'] }}`,
                    email: `{{ $about_mosque['email'] }}`
                },
                showModal: false,
                modalKey: '',
                modalTitle: '',
                tempValue: '',
                tempValueAddress: '',
                tempValuePhone: '',
                tempValueEmail: '',

                openModal(key) {
                    this.modalKey = key;
                    this.modalTitle = key.charAt(0).toUpperCase() + key.slice(1);
                    this.showModal = true;

                    if (key === 'history' || key === 'visi') {
                        this.tempValue = this.data[key];
                    } else if (key === 'misi') {
                        this.tempValue = this.data.misi.join('; ');
                    } else if (key === 'kontak') {
                        this.tempValueAddress = this.data.address;
                        this.tempValuePhone = this.data.phone_number;
                        this.tempValueEmail = this.data.email;
                    }
                },

                saveChanges() {
                    if (this.modalKey === 'history' || this.modalKey === 'visi') {
                        this.data[this.modalKey] = this.tempValue;
                    } else if (this.modalKey === 'misi') {
                        this.data.misi = this.tempValue.split(';').map(s => s.trim());
                    } else if (this.modalKey === 'kontak') {
                        this.data.address = this.tempValueAddress;
                        this.data.phone_number = this.tempValuePhone;
                        this.data.email = this.tempValueEmail;
                    }
                    this.showModal = false;
                }
            }
        }
    </script>

@endsection
