@extends('layouts.admin')

@section('title', 'Program Masjid')
@section('page-title', 'Program Masjid')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-xl font-semibold text-gray-900">Daftar Program</h2>
            <p class="text-sm text-gray-600">Kelola program-program masjid</p>
        </div>
        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
            <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
            Tambah Program
        </button>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Program 1 -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Pendidikan
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Aktif
                        </span>
                    </div>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">TPA Sore</h3>
                    <p class="text-sm text-gray-600 mb-3">Taman Pendidikan Al-Quran untuk anak-anak usia 5-12 tahun</p>
                    <div class="space-y-1">
                        <p class="text-sm text-gray-500">
                            <span class="font-medium">Jadwal:</span> Senin-Jumat, 16:00-17:30
                        </p>
                        <p class="text-sm text-gray-500">
                            <span class="font-medium">Penanggung Jawab:</span> Ustadz Abdullah
                        </p>
                    </div>
                </div>

                <div class="flex justify-end space-x-2">
                    <button class="text-emerald-600 hover:text-emerald-900 text-sm font-medium">
                        <i data-lucide="eye" class="w-4 h-4"></i>
                    </button>
                    <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                        <i data-lucide="edit" class="w-4 h-4"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-900 text-sm font-medium">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Program 2 -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                Keagamaan
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Aktif
                        </span>
                    </div>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Kajian Ahad Pagi</h3>
                    <p class="text-sm text-gray-600 mb-3">Kajian rutin setiap hari Ahad setelah shalat Subuh</p>
                    <div class="space-y-1">
                        <p class="text-sm text-gray-500">
                            <span class="font-medium">Jadwal:</span> Ahad, 06:00-07:00
                        </p>
                        <p class="text-sm text-gray-500">
                            <span class="font-medium">Penanggung Jawab:</span> Ustadz Muhammad
                        </p>
                    </div>
                </div>

                <div class="flex justify-end space-x-2">
                    <button class="text-emerald-600 hover:text-emerald-900 text-sm font-medium">
                        <i data-lucide="eye" class="w-4 h-4"></i>
                    </button>
                    <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                        <i data-lucide="edit" class="w-4 h-4"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-900 text-sm font-medium">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Program 3 -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Sosial
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Aktif
                        </span>
                    </div>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Santunan Yatim</h3>
                    <p class="text-sm text-gray-600 mb-3">Program bantuan rutin untuk anak yatim di sekitar masjid</p>
                    <div class="space-y-1">
                        <p class="text-sm text-gray-500">
                            <span class="font-medium">Jadwal:</span> Setiap bulan
                        </p>
                        <p class="text-sm text-gray-500">
                            <span class="font-medium">Penanggung Jawab:</span> Ibu Siti Aminah
                        </p>
                    </div>
                </div>

                <div class="flex justify-end space-x-2">
                    <button class="text-emerald-600 hover:text-emerald-900 text-sm font-medium">
                        <i data-lucide="eye" class="w-4 h-4"></i>
                    </button>
                    <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                        <i data-lucide="edit" class="w-4 h-4"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-900 text-sm font-medium">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Program 4 -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Pendidikan
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Aktif
                        </span>
                    </div>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Remaja Masjid</h3>
                    <p class="text-sm text-gray-600 mb-3">Pembinaan generasi muda melalui berbagai kegiatan positif</p>
                    <div class="space-y-1">
                        <p class="text-sm text-gray-500">
                            <span class="font-medium">Jadwal:</span> Sabtu, 19:00-21:00
                        </p>
                        <p class="text-sm text-gray-500">
                            <span class="font-medium">Penanggung Jawab:</span> Ustadz Yusuf
                        </p>
                    </div>
                </div>

                <div class="flex justify-end space-x-2">
                    <button class="text-emerald-600 hover:text-emerald-900 text-sm font-medium">
                        <i data-lucide="eye" class="w-4 h-4"></i>
                    </button>
                    <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                        <i data-lucide="edit" class="w-4 h-4"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-900 text-sm font-medium">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection