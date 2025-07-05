@extends('layouts.admin')

@section('title', 'Galeri Masjid')
@section('page-title', 'Galeri Masjid')

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
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Daftar Galeri Kegiatan</h2>
                <p class="text-sm text-gray-600">Kelola dokumentasi kegiatan masjid</p>
            </div>
            <button
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                Tambah Galeri
            </button>
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
                                <div class="flex justify-center space-x-2">
                                    <button class="text-emerald-600 hover:text-emerald-900" title="Lihat">
                                        <i data-lucide="eye" class="w-4 h-4"></i>
                                    </button>
                                    <button class="text-indigo-600 hover:text-indigo-900" title="Edit">
                                        <i data-lucide="edit" class="w-4 h-4"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Hapus">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
