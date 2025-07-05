@extends('layouts.admin')

@section('title', 'Program Masjid')
@section('page-title', 'Program Masjid')

<?php
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
];
?>

@section('content')
    <div class="space-y-10">

        <!-- === HEADER: Daftar Program === -->
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Daftar Program</h2>
                <p class="text-sm text-gray-600">Kelola program-program masjid</p>
            </div>
            <button
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                Tambah Program
            </button>
        </div>

        <!-- === GRID: Kartu Program === -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($programs as $program)
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 group relative">

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
                        <button class="text-emerald-600 hover:text-emerald-900 text-sm font-medium" title="Lihat Detail">
                            <i data-lucide="eye" class="w-4 h-4"></i>
                        </button>
                        <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium" title="Edit Program">
                            <i data-lucide="edit" class="w-4 h-4"></i>
                        </button>
                        <button class="text-red-600 hover:text-red-900 text-sm font-medium" title="Hapus Program">
                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- === HEADER: Daftar Kegiatan === -->
        <div class="flex justify-between items-center pt-10">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Daftar Kegiatan</h2>
                <p class="text-sm text-gray-600">Kelola kegiatan pada program masjid</p>
            </div>
            <button
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                Tambah Kegiatan
            </button>
        </div>

        <!-- === TABEL: Daftar Aktivitas === -->
        <div class="overflow-x-auto rounded-lg shadow">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="bg-emerald-600 text-white uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3">Program</th>
                        <th class="px-6 py-3">Aktivitas</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($programs as $program)
                        @foreach ($program['activity'] as $index => $activity)
                            <tr class="border-b border-gray-200 hover:bg-emerald-50">
                                <td class="px-6 py-4 font-medium text-gray-900">{{ $program['title'] }}</td>
                                <td class="px-6 py-4">{{ $activity }}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">
                                        <button class="text-indigo-600 hover:text-indigo-900" title="Edit Kegiatan"
                                            @click="editActivity('{{ $program['title'] }}', {{ $index }})">
                                            <i data-lucide="edit" class="w-4 h-4"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-900" title="Hapus Kegiatan"
                                            @click="deleteActivity('{{ $program['title'] }}', {{ $index }})">
                                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                                        </button>
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
