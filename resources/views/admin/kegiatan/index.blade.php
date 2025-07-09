@extends('layouts.admin')

@section('title', 'Galeri Kegiatan')
@section('page-title', 'Galeri Kegiatan')

<?php
$galleries = [
    [
        'id' => 1,
        'title' => 'Qurban 1446 H / 2025 M',
        'category' => 'ibadah_dakwah',
        'date' => '2024-12-15',
        'image' => '/images/qurban2.jpg',
        'description' => 'Pelaksanaan pemotongan hewan qurban oleh ketua yayasan.',
    ],
    [
        'id' => 2,
        'title' => 'Kajian Kamis Pagi',
        'category' => 'ibadah_dakwah',
        'date' => '2024-04-10',
        'image' => '/images/kajian-kamis-pagi-1.jpg',
        'description' => 'Kegiatan kajian kamis pagi',
    ],
    [
        'id' => 3,
        'title' => 'TPA Sore - Pembelajaran Al-Quran',
        'category' => 'pendidikan_agama',
        'date' => '2024-11-20',
        'image' => '/images/tpa-1.jpg',
        'description' => 'Kegiatan pembelajaran Al-Quran untuk anak-anak di TPA sore',
    ],
    [
        'id' => 4,
        'title' => 'Layanan Ambulance Gratis',
        'category' => 'kegiatan_sosial',
        'date' => '2024-10-25',
        'image' => '/images/layanan-ambulance-1.jpg',
        'description' => 'Layanan ambulance gratis 24 jam',
    ],
];
?>

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center space-x-2">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Daftar Galeri Kegiatan</h2>
                <p class="text-sm text-gray-600">Kelola dokumentasi kegiatan masjid</p>
            </div>

            <div x-data="{ open: false }" class="relative">
                <!-- Tombol -->
                <button @click="open = true"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 cursor-pointer">
                    <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                    Tambah Foto
                </button>

                <!-- Modal -->
                <div x-show="open" x-cloak x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50" role="dialog" aria-modal="true"
                    aria-labelledby="modal-title">

                    <!-- Modal Content -->
                    <div
                        class="bg-white rounded-lg shadow-xl w-full max-w-lg max-h-[75vh] overflow-hidden overflow-y-scroll m-4">
                        <form @submit.prevent="open = false" enctype="multipart/form-data">
                            <div class="px-6 py-5">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4" id="modal-title">
                                    Tambah Foto Kegiatan
                                </h3>
                                <hr>

                                <div class="space-y-4 mt-4">
                                    <!-- Judul -->
                                    <div>
                                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                                        <input type="text" id="judul" name="judul"
                                            class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                            placeholder="Masukkan judul kegiatan" required>
                                    </div>

                                    <!-- Deskripsi -->
                                    <div>
                                        <label for="deskripsi"
                                            class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                        <textarea id="deskripsi" name="deskripsi" rows="3"
                                            class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                            placeholder="Masukkan deskripsi kegiatan" required></textarea>
                                    </div>

                                    <!-- Jenis Program -->
                                    <div>
                                        <label for="jenis_program" class="block text-sm font-medium text-gray-700">Jenis
                                            Program</label>
                                        <select id="jenis_program" name="jenis_program"
                                            class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                            required>
                                            <option value="" disabled selected>Pilih jenis program</option>

                                            <option value="keagamaan">Keagamaan</option>
                                            <option value="sosial">Sosial</option>
                                            <option value="pendidikan">Pendidikan</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>

                                    <!-- Tanggal -->
                                    <div>
                                        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal
                                            Dilaksanakan</label>
                                        <input type="date" id="tanggal" name="tanggal"
                                            class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                            required>
                                    </div>

                                    <!-- Upload Gambar -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Upload Gambar</label>
                                        <div class="flex items-center justify-center w-full">
                                            <label for="dropzone-file"
                                                class="flex flex-col items-center justify-center w-full h-60 border-2 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 border-emerald-600">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg class="w-8 h-8 mb-4 text-gray-500" fill="none"
                                                        viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5
                                                                                                                     5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5
                                                                                                                     5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                    </svg>
                                                    <p class="mb-2 text-sm text-gray-500">
                                                        <span class="font-semibold">Klik untuk unggah</span> atau seret dan
                                                        lepas
                                                    </p>
                                                    <p class="text-xs text-gray-500">SVG, PNG, JPG, atau GIF (maks.
                                                        800x400px)</p>
                                                </div>
                                                <input id="dropzone-file" name="gambar" type="file" accept="image/*"
                                                    class="hidden" required />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="bg-gray-50 px-6 py-3 flex justify-end space-x-3">
                                <button type="button" @click="open = false"
                                    class="inline-flex justify-center rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-100">
                                    Batal
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

        <!-- Tabel Galeri -->
        <div class="overflow-x-auto rounded-lg shadow">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="bg-emerald-600 text-white uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Gambar</th>
                        <th class="px-6 py-3">Judul</th>
                        <th class="px-6 py-3">Kategori</th>
                        <th class="px-6 py-3">Tanggal Pelaksaan</th>
                        <th class="px-6 py-3">Deskripsi</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($galleries as $index => $item)
                        <tr class="border-b hover:bg-emerald-50">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $index + 1 }}</td>
                            <td class="px-6 py-4">
                                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                                    class="w-20 h-14 object-cover rounded">
                            </td>
                            <td class="px-6 py-4">{{ $item['title'] }}</td>
                            <td class="px-6 py-4 capitalize">{{ str_replace('_', ' ', $item['category']) }}</td>
                            <td class="px-6 py-4">{{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}</td>
                            <td class="px-6 py-4 max-w-sm truncate" title="{{ $item['description'] }}">
                                {{ Str::limit($item['description'], 60) }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center space-x-2 text-start">

                                    <div x-data="{ openId: null, imagePreview: '{{ asset($item['image']) }}' }" class="inline-block">
                                        <!-- Tombol Edit -->
                                        <button @click="openId = {{ $item['id'] }}"
                                            class="text-indigo-600 hover:text-indigo-900" title="Edit">
                                            <i data-lucide="edit" class="w-4 h-4"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div x-show="openId === {{ $item['id'] }}" x-cloak x-transition
                                            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
                                            role="dialog" aria-modal="true">

                                            <div
                                                class="bg-white rounded-lg shadow-lg max-w-lg max-h-[75vh] overflow-hidden overflow-y-scroll m-4">
                                                <form action="" method="POST" enctype="multipart/form-data"
                                                    @submit.prevent="openId = null">
                                                    @csrf

                                                    <div class="p-6 space-y-4">
                                                        <h2 class="text-lg font-semibold text-gray-800">Edit Kegiatan</h2>
                                                        <hr>

                                                        <!-- Judul -->
                                                        <div>
                                                            <label
                                                                class="block text-sm font-medium text-gray-600">Judul</label>
                                                            <input type="text" name="title"
                                                                value="{{ $item['title'] }}"
                                                                class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-emerald-500 focus:border-emerald-500"
                                                                required>
                                                        </div>

                                                        <!-- Deskripsi -->
                                                        <div>
                                                            <label
                                                                class="block text-sm font-medium text-gray-600">Deskripsi</label>
                                                            <textarea name="description" rows="3"
                                                                class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-emerald-500" required>{{ $item['description'] }}</textarea>
                                                        </div>

                                                        <!-- Jenis Program -->
                                                        <div>
                                                            <label class="block text-sm font-medium text-gray-600">Jenis
                                                                Program</label>
                                                            <select name="category"
                                                                class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-emerald-500"
                                                                required>
                                                                <option value="" disabled selected>Pilih Kategori
                                                                </option>
                                                                <option value="ibadah_dakwah" @selected($item['category'] === 'ibadah_dakwah')>
                                                                    Ibadah & Dakwah</option>
                                                                <option value="sosial" @selected($item['category'] === 'sosial')>Sosial
                                                                </option>
                                                                <option value="pendidikan" @selected($item['category'] === 'pendidikan')>
                                                                    Pendidikan</option>
                                                            </select>
                                                        </div>

                                                        <!-- Tanggal -->
                                                        <div>
                                                            <label
                                                                class="block text-sm font-medium text-gray-600">Tanggal</label>
                                                            <input type="date" name="date"
                                                                value="{{ $item['date'] }}"
                                                                class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-emerald-500"
                                                                required>
                                                        </div>

                                                        <!-- Dropzone Style Upload -->
                                                        <div>
                                                            <label
                                                                class="block text-sm font-medium text-gray-600 mb-1">Foto</label>
                                                            <div
                                                                class="relative border-2 border-dashed border-gray-300 rounded-md p-4 bg-gray-50">
                                                                <!-- Input File Floating -->
                                                                <div class="absolute top-2 z-10">
                                                                    <input type="file" name="image" accept="image/*"
                                                                        @change="imagePreview = URL.createObjectURL($event.target.files[0])"
                                                                        class="block file:bg-emerald-600 file:text-white file:px-3 file:py-1 file:rounded file:text-sm file:border-0 text-gray-500 text-sm">
                                                                </div>

                                                                <!-- Gambar Preview -->
                                                                <div class="mt-6">
                                                                    <img :src="imagePreview" alt="Preview"
                                                                        class="w-full rounded-md object-cover border border-gray-200 shadow-sm">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Footer -->
                                                    <div class="bg-gray-50 px-6 py-3 flex justify-end space-x-2">
                                                        <button type="button" @click="openId = null"
                                                            class="text-sm font-semibold px-4 py-2 border rounded-md bg-white hover:bg-gray-100">Batal</button>
                                                        <button type="submit"
                                                            class="text-sm font-semibold px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div x-data="{ openDeleteId: null }" class="relative">
                                        <!-- Tombol Hapus -->
                                        <button @click="openDeleteId = '{{ $item['id'] }}'"
                                            class="text-red-600 hover:text-red-900" title="Hapus">
                                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                                        </button>

                                        <!-- Modal Konfirmasi -->
                                        <div x-show="openDeleteId === '{{ $item['id'] }}'" x-cloak x-transition
                                            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
                                            <div class="bg-white rounded-lg shadow-xl w-full max-w-sm m-4 overflow-hidden text-center">
                                                <div class="px-6 py-5 space-y-4">
                                                    <h3 class="text-lg font-semibold text-gray-900">Konfirmasi Hapus
                                                    </h3>
                                                    <p class="text-sm text-gray-700">
                                                        Yakin ingin menghapus foto:<br>
                                                        <strong>{{ $item['title'] }}</strong>?
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
                </tbody>
            </table>
        </div>
    </div>

@endsection
