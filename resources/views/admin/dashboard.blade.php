@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

<?php
$latestActivities = [
    [
        'title' => 'Qurban 1446 H / 2025 M',
        'category' => 'ibadah_dakwah',
        'date' => '2024-12-15',
        'image' => '/images/qurban2.jpg',
        'description' => 'Pemotongan hewan qurban oleh ketua yayasan dan pengurus masjid.',
    ],
    [
        'title' => 'TPA Sore - Pembelajaran Al-Quran',
        'category' => 'pendidikan_agama',
        'date' => '2024-11-20',
        'image' => '/images/tpa-1.jpg',
        'description' => 'Pembelajaran Al-Quran untuk anak-anak setiap sore di aula masjid.',
    ],
    [
        'title' => 'Layanan Ambulance Gratis',
        'category' => 'kegiatan_sosial',
        'date' => '2024-10-25',
        'image' => '/images/layanan-ambulance-1.jpg',
        'description' => 'Layanan gratis 24 jam untuk jamaah dan masyarakat umum.',
    ],
];

?>

@section('content')
    <div class="space-y-6">
        <!-- HEADER -->
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Dashboard Admin</h1>
            <p class="text-sm text-gray-600">Ringkasan data dan statistik kegiatan masjid</p>
        </div>

        <!-- STATISTIK KOTAK -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white p-5 rounded-xl shadow-md flex items-center space-x-4 hover:shadow-lg transition">
                <div class="bg-emerald-100 text-emerald-600 p-3 rounded-full">
                    <i data-lucide="layers" class="w-6 h-6"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Jumlah Program</p>
                    <p class="text-xl font-semibold text-gray-800">6</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl shadow-md flex items-center space-x-4 hover:shadow-lg transition">
                <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full">
                    <i data-lucide="calendar-check" class="w-6 h-6"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Total Kegiatan</p>
                    <p class="text-xl font-semibold text-gray-800">14</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl shadow-md flex items-center space-x-4 hover:shadow-lg transition">
                <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full">
                    <i data-lucide="image" class="w-6 h-6"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Galeri Kegiatan</p>
                    <p class="text-xl font-semibold text-gray-800">12</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl shadow-md flex items-center space-x-4 hover:shadow-lg transition">
                <div class="bg-red-100 text-red-600 p-3 rounded-full">
                    <i data-lucide="users" class="w-6 h-6"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Jumlah Jamaah</p>
                    <p class="text-xl font-semibold text-gray-800">850+</p>
                </div>
            </div>
        </div>

        <!-- RINGKASAN KEGIATAN -->
        <div class="bg-white p-6 rounded-xl shadow-md">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-800">Kegiatan Terbaru</h2>
                <a href="{{ route('admin.galeri-kegiatan') }}" class="text-sm text-emerald-600 hover:underline">Lihat
                    Semua</a>
            </div>

            <div class="divide-y divide-gray-100">
                @foreach ($latestActivities as $activity)
                    <div class="flex items-start space-x-4 py-4">
                        <!-- Gambar -->
                        <img src="{{ $activity['image'] }}" alt="{{ $activity['title'] }}"
                            class="w-20 h-14 object-cover rounded-md border shrink-0" />

                        <!-- Konten -->
                        <div class="flex-1">
                            <!-- Title dan Kategori (1 baris, kiri-kanan) -->
                            <div class="flex justify-between items-start">
                                <h3 class="text-base font-medium text-gray-900">{{ $activity['title'] }}</h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs bg-emerald-100 text-emerald-800 rounded-full whitespace-nowrap">
                                    {{ ucwords(str_replace('_', ' ', $activity['category'])) }}
                                </span>
                            </div>

                            <!-- Deskripsi -->
                            <p class="text-sm text-gray-600 mt-1 line-clamp-2">
                                {{ $activity['description'] }}
                            </p>

                            <!-- Tanggal -->
                            <p class="text-xs text-gray-400 mt-1">
                                {{ \Carbon\Carbon::parse($activity['date'])->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
