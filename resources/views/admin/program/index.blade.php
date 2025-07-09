@extends('layouts.admin')

@section('title', 'Program Masjid')
@section('page-title', 'Program Masjid')

<?php
$programs = [
    [
        'id' => '1',
        'icon' => 'book-open',
        'color' => 'emerald',
        'title' => 'Ibadah & Dakwah',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, possimus?',
        'activity' => ['Kajian Kamis Pagi (09:00-11:30)', 'Kajian Jumat Malam (19:30-21:00)', 'Kajian Ahad Pagi (05:00-06:30)'],
    ],
    [
        'id' => '2',
        'icon' => 'book',
        'color' => 'purple',
        'title' => 'Pendidikan Agama',
        'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, iste!',
        'activity' => ['TPA Sore (16:00-17:30)'],
    ],
    [
        'id' => '3',
        'icon' => 'heart-handshake',
        'color' => 'amber',
        'title' => 'Kegiatan Sosial',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, architecto',
        'activity' => ['Santunan Yatim / Anak Asuh', 'Layanan Ambulans Gratis'],
    ],
    [
        'id' => '4',
        'icon' => 'users',
        'color' => 'blue',
        'title' => 'Kegiatan Remaja',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, eos!',
        'activity' => ['Remaja Masjid', 'Pelatihan Keterampilan', 'Olahraga Bersama'],
    ],
    [
        'id' => '5',
        'icon' => 'landmark',
        'color' => 'gray',
        'title' => 'Pemulasaraan Jenazah & Pemakaman',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, eos!',
        'activity' => ['Layanan Pemulasaraan Jenazah', 'Layanan Pemakaman'],
    ],
];
?>

@section('content')
    <div class="space-y-10">

        <!-- === HEADER: Daftar Program === -->
        <div class="flex justify-between items-center space-x-2">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Daftar Program</h2>
                <p class="text-sm text-gray-600">Kelola program-program masjid</p>
            </div>

            <div x-data="{
                open: false,
                icon: '',
                color: 'emerald',
                colorOptions: {
                    slate: 'bg-slate-500',
                    gray: 'bg-gray-500',
                    zinc: 'bg-zinc-500',
                    neutral: 'bg-neutral-500',
                    stone: 'bg-stone-500',
                    red: 'bg-red-500',
                    orange: 'bg-orange-500',
                    amber: 'bg-amber-500',
                    yellow: 'bg-yellow-500',
                    lime: 'bg-lime-500',
                    green: 'bg-green-500',
                    emerald: 'bg-emerald-500',
                    teal: 'bg-teal-500',
                    cyan: 'bg-cyan-500',
                    sky: 'bg-sky-500',
                    blue: 'bg-blue-500',
                    indigo: 'bg-indigo-500',
                    violet: 'bg-violet-500',
                    purple: 'bg-purple-500',
                    fuchsia: 'bg-fuchsia-500',
                    pink: 'bg-pink-500',
                    rose: 'bg-rose-500'
                }
            }" class="relative">
                <!-- Tombol Trigger -->
                <button @click="open = true"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 cursor-pointer">
                    <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                    Tambah Program
                </button>

                <!-- Modal -->
                <div x-show="open" x-cloak x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50" role="dialog"
                    aria-modal="true">
                    <div class="bg-white rounded-lg shadow-xl w-full max-w-lg overflow-hidden m-4">
                        <form @submit.prevent="open = false">
                            <div class="px-6 py-5 space-y-4">
                                <h3 class="text-lg font-semibold text-gray-900">Tambah Program Baru</h3>
                                <hr>

                                <!-- Nama Program -->
                                <div>
                                    <label for="nama_program" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                        Program</label>
                                    <input type="text" id="nama_program" name="nama_program"
                                        class="w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                        placeholder="Masukkan nama program" required>
                                </div>

                                <!-- Deskripsi -->
                                <div>
                                    <label for="deskripsi"
                                        class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi" rows="3"
                                        class="w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                        placeholder="Masukkan deskripsi program" required></textarea>
                                </div>

                                <!-- Icon & Color (Responsif) -->
                                <div class="flex flex-col md:flex-row gap-4 mb-4">
                                    <!-- Icon -->
                                    <div class="flex-1">
                                        <label for="icon" class="block text-sm font-medium text-gray-700 mb-1">
                                            Icon (Nama ikon Lucide)
                                        </label>
                                        <input type="text" id="icon" x-model="icon"
                                            class="w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                            placeholder="plus, star, bookmark, etc" required>
                                        <p class="mt-1 text-xs text-gray-500">Contoh: star, heart, bookmark</p>
                                    </div>

                                    <!-- Color -->
                                    <div class="flex-1">
                                        <label for="color" class="block text-sm font-medium text-gray-700 mb-1">
                                            Warna
                                        </label>
                                        <div class="relative">
                                            <input type="text" id="color" x-model="color" list="colors"
                                                class="w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                                placeholder="emerald, red, blue, etc" required>

                                            <datalist id="colors">
                                                <template x-for="(value, key) in colorOptions" :key="key">
                                                    <option x-text="key"></option>
                                                </template>
                                            </datalist>

                                            <!-- Warna Preview -->
                                            <template x-if="color && colorOptions[color]">
                                                <div :class="colorOptions[color]"
                                                    class="w-5 h-5 rounded-full absolute right-3 top-2.5"></div>
                                            </template>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Footer -->
                            <div class="bg-gray-50 px-6 py-3 flex justify-end space-x-3">
                                <button type="button" @click="open = false"
                                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 text-sm font-medium text-white bg-emerald-600 rounded-md shadow-sm hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- === GRID: Kartu Program === -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            @foreach ($programs as $program)
                <div
                    class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 group relative">

                    <!-- ICON PROGRAM -->
                    <div
                        class="w-12 h-12 bg-<?= $program['color'] ?>-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-<?= $program['color'] ?>-200 transition-colors">
                        <i data-lucide="<?= $program['icon'] ?>" class="w-6 h-6 text-<?= $program['color'] ?>-600"></i>
                    </div>

                    <!-- JUDUL & DESKRIPSI -->
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?= $program['title'] ?></h3>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        <?= $program['desc'] ?>
                    </p>

                    <!-- LIST KEGIATAN -->
                    <ul class="text-sm text-gray-500 space-y-1 mb-10">
                        @foreach ($program['activity'] as $activity)
                            <li>• <?= $activity ?></li>
                        @endforeach
                    </ul>

                    <!-- ACTION BUTTONS -->
                    <div class="absolute bottom-4 right-4 flex space-x-2">

                        <div x-data="{
                            openId: null,
                            form: {
                                id: '{{ $program['id'] }}',
                                title: '{{ $program['title'] }}',
                                desc: '{{ $program['desc'] ?? '' }}',
                                icon: '{{ $program['icon'] ?? '' }}',
                                color: '{{ $program['color'] ?? 'emerald' }}'
                            },
                            colorOptions: {
                                slate: 'bg-slate-500',
                                gray: 'bg-gray-500',
                                zinc: 'bg-zinc-500',
                                neutral: 'bg-neutral-500',
                                stone: 'bg-stone-500',
                                red: 'bg-red-500',
                                orange: 'bg-orange-500',
                                amber: 'bg-amber-500',
                                yellow: 'bg-yellow-500',
                                lime: 'bg-lime-500',
                                green: 'bg-green-500',
                                emerald: 'bg-emerald-500',
                                teal: 'bg-teal-500',
                                cyan: 'bg-cyan-500',
                                sky: 'bg-sky-500',
                                blue: 'bg-blue-500',
                                indigo: 'bg-indigo-500',
                                violet: 'bg-violet-500',
                                purple: 'bg-purple-500',
                                fuchsia: 'bg-fuchsia-500',
                                pink: 'bg-pink-500',
                                rose: 'bg-rose-500'
                            }
                        }">
                            <!-- Tombol Edit -->
                            <button @click="openId = form.id"
                                class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                                <i data-lucide="edit" class="w-4 h-4"></i>
                            </button>

                            <!-- Modal -->
                            <div x-show="openId === form.id" x-cloak x-transition
                                class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
                                <div class="bg-white rounded-lg shadow-xl w-full max-w-lg m-4 overflow-hidden">
                                    <form @submit.prevent="openId = null">
                                        <div class="px-6 py-5 space-y-4">
                                            <h3 class="text-lg font-semibold text-gray-900">Edit Program</h3>
                                            <hr>

                                            <!-- Nama Program -->
                                            <div>
                                                <label for="title-{{ $program['id'] }}"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Nama
                                                    Program</label>
                                                <input x-model="form.title" type="text" id="title-{{ $program['id'] }}"
                                                    class="w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                                    required>
                                            </div>

                                            <!-- Deskripsi -->
                                            <div>
                                                <label
                                                    class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                                                <textarea x-model="form.desc" rows="3"
                                                    class="w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                                    required></textarea>
                                            </div>

                                            <!-- Icon & Warna -->
                                            <div class="flex flex-col md:flex-row gap-4">
                                                <div class="flex-1">
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Icon</label>
                                                    <input x-model="form.icon" type="text"
                                                        placeholder="star, heart, bookmark"
                                                        class="w-full px-4 py-2 border rounded-md shadow-sm focus:ring-emerald-500 sm:text-sm">
                                                </div>

                                                <div class="flex-1">
                                                    <label
                                                        class="block text-sm font-medium text-gray-700 mb-1">Warna</label>
                                                    <div class="relative">
                                                        <input x-model="form.color" list="colors"
                                                            class="w-full px-4 py-2 border rounded-md shadow-sm focus:ring-emerald-500 sm:text-sm">
                                                        <datalist id="colors">
                                                            <template x-for="(value, key) in colorOptions"
                                                                :key="key">
                                                                <option x-text="key"></option>
                                                            </template>
                                                        </datalist>
                                                        <template x-if="form.color && colorOptions[form.color]">
                                                            <div :class="colorOptions[form.color]"
                                                                class="w-5 h-5 rounded-full absolute right-3 top-2.5">
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-gray-50 px-6 py-3 flex justify-end gap-2">
                                            <button type="button" @click="openId = null"
                                                class="px-4 py-2 text-sm bg-white border rounded-md shadow-sm hover:bg-gray-50">
                                                Batal
                                            </button>
                                            <button type="submit"
                                                class="px-4 py-2 text-sm text-white bg-emerald-600 rounded-md hover:bg-emerald-700">
                                                Simpan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div x-data="{ openDeleteId: null }" class="relative text-center">
                            <!-- Tombol Hapus -->
                            <button @click="openDeleteId = '{{ $program['id'] }}'"
                                class="text-red-600 hover:text-red-900 text-sm font-medium" title="Hapus Program">
                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                            </button>

                            <!-- Modal Konfirmasi -->
                            <div x-show="openDeleteId === '{{ $program['id'] }}'" x-cloak x-transition
                                class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
                                <div class="bg-white rounded-lg shadow-xl w-full max-w-sm m-4 overflow-hidden">
                                    <div class="px-6 py-5 space-y-4">
                                        <h3 class="text-lg font-semibold text-gray-900">Konfirmasi Hapus</h3>
                                        <p class="text-sm text-gray-700">
                                            Yakin ingin menghapus program:<br>
                                            <strong>{{ $program['title'] }}</strong>?
                                        </p>
                                    </div>

                                    <!-- Footer -->
                                    <div class="bg-gray-50 px-6 py-3 flex justify-end gap-2">
                                        <button @click="openDeleteId = null"
                                            class="px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-100">
                                            Batal
                                        </button>

                                        <form action="#" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="px-4 py-2 text-sm text-white bg-red-600 rounded-md hover:bg-red-700">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>

        <!-- === HEADER: Daftar Kegiatan === -->
        <div class="flex justify-between items-center space-x-2 pt-10">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Daftar Kegiatan</h2>
                <p class="text-sm text-gray-600">Kelola kegiatan pada program masjid</p>
            </div>

            <div x-data="{ open: false }" class="relative">
                <!-- Tombol -->
                <button @click="open = true"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 cursor-pointer">
                    <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                    Tambah Kegiatan
                </button>

                <!-- Modal -->
                <div x-show="open" x-cloak x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50" role="dialog"
                    aria-modal="true" aria-labelledby="modal-title">

                    <!-- Modal Content -->
                    <div class="bg-white rounded-lg shadow-xl w-full max-w-md overflow-hidden m-4">
                        <form @submit.prevent="open = false">
                            <div class="px-6 py-5">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4" id="modal-title">
                                    Tambah Kegiatan Baru
                                </h3>
                                <hr>

                                <div class="space-y-4 mt-4">
                                    <!-- Nama Kegiatan -->
                                    <div>
                                        <label for="nama_kegiatan" class="block text-sm font-medium text-gray-700">
                                            Nama Kegiatan
                                        </label>
                                        <input type="text" id="nama_kegiatan" name="nama_kegiatan"
                                            class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                            placeholder="Masukkan nama kegiatan" required>
                                    </div>

                                    <!-- Jenis Program -->
                                    <div>
                                        <label for="jenis_program" class="block text-sm font-medium text-gray-700">
                                            Jenis Program
                                        </label>
                                        <select id="jenis_program" name="jenis_program"
                                            class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                            required>
                                            <option value="" disabled selected>Pilih jenis program</option>
                                            @foreach ($programs as $program)
                                                <option value="{{ $program['title'] }}">{{ $program['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 px-6 py-3 flex justify-end space-x-3">
                                <button type="button" @click="open = false"
                                    class="inline-flex justify-center rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-100">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="inline-flex justify-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- === TABEL: Daftar Kegiatan === -->
        <div class="overflow-x-auto rounded-lg shadow">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="bg-emerald-600 text-white uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3">Nama Kegiatan</th>
                        <th class="px-6 py-3">Program</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($programs as $program)
                        @foreach ($program['activity'] as $index => $activity)
                            <tr class="border-b border-gray-200 hover:bg-emerald-50">
                                <td class="px-6 py-4">{{ $activity }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900">{{ $program['title'] }}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">

                                        <div x-data="{ openId: null }" class="relative">
                                            <!-- Tombol Edit -->
                                            <button @click="openId = '{{ $program['id'] }}_{{ $index }}'"
                                                class="text-indigo-600 hover:text-indigo-900" title="Edit Kegiatan">
                                                <i data-lucide="edit" class="w-4 h-4"></i>
                                            </button>

                                            <!-- Modal Edit -->
                                            <div x-show="openId === '{{ $program['id'] }}_{{ $index }}'" x-cloak
                                                x-transition
                                                class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
                                                role="dialog" aria-modal="true">

                                                <div
                                                    class="bg-white rounded-lg shadow-xl w-full max-w-md m-4 overflow-hidden">
                                                    <form @submit.prevent="openId = null">
                                                        <div class="px-6 py-5">
                                                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Edit
                                                                Kegiatan</h3>
                                                            <hr>

                                                            <div class="space-y-4 mt-4 text-start">
                                                                <!-- Nama Kegiatan -->
                                                                <div>
                                                                    <label for="nama_kegiatan"
                                                                        class="block text-sm font-medium text-gray-700">Nama
                                                                        Kegiatan</label>
                                                                    <input type="text" id="nama_kegiatan"
                                                                        name="nama_kegiatan" value="{{ $activity }}"
                                                                        class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:ring-emerald-500 sm:text-sm"
                                                                        required>
                                                                </div>

                                                                <!-- Jenis Program -->
                                                                <div>
                                                                    <label for="jenis_program"
                                                                        class="block text-sm font-medium text-gray-700">Jenis
                                                                        Program</label>
                                                                    <select id="jenis_program" name="jenis_program"
                                                                        class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:ring-emerald-500 sm:text-sm"
                                                                        required>
                                                                        <option value="" disabled selected>Pilih
                                                                            jenis program</option>
                                                                        @foreach ($programs as $p)
                                                                            <option value="{{ $p['title'] }}"
                                                                                @selected($p['title'] === $program['title'])>
                                                                                {{ $p['title'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bg-gray-50 px-6 py-3 flex justify-end gap-2">
                                                            <button type="button" @click="openId = null"
                                                                class="px-4 py-2 text-sm bg-white border rounded-md hover:bg-gray-100">
                                                                Batal
                                                            </button>
                                                            <button type="submit"
                                                                class="px-4 py-2 text-sm text-white bg-emerald-600 rounded-md hover:bg-emerald-700">
                                                                Simpan
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div x-data="{ openDeleteId: null }" class="relative">
                                            <!-- Tombol Hapus -->
                                            <button @click="openDeleteId = '{{ $program['id'] }}'"
                                                class="text-red-600 hover:text-red-900" title="Hapus Kegiatan">
                                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                                            </button>

                                            <!-- Modal Konfirmasi -->
                                            <div x-show="openDeleteId === '{{ $program['id'] }}'" x-cloak x-transition
                                                class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
                                                <div
                                                    class="bg-white rounded-lg shadow-xl w-full max-w-sm m-4 overflow-hidden">
                                                    <div class="px-6 py-5 space-y-4">
                                                        <h3 class="text-lg font-semibold text-gray-900">Konfirmasi Hapus
                                                        </h3>
                                                        <p class="text-sm text-gray-700">
                                                            Yakin ingin menghapus kegiatan:<br>
                                                            <strong>{{ $activity }}</strong>?
                                                        </p>
                                                    </div>

                                                    <!-- Footer -->
                                                    <div class="bg-gray-50 px-6 py-3 flex justify-end gap-2">
                                                        <button @click="openDeleteId = null"
                                                            class="px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-100">
                                                            Batal
                                                        </button>

                                                        <form action="#" method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class="px-4 py-2 text-sm text-white bg-red-600 rounded-md hover:bg-red-700">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
