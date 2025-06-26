@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-emerald-500 rounded-md flex items-center justify-center">
                            <i data-lucide="building" class="w-5 h-5 text-white"></i>
                        </div>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Masjid</dt>
                            <dd class="text-lg font-medium text-gray-900">1</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-blue-500 rounded-md flex items-center justify-center">
                            <i data-lucide="book-open" class="w-5 h-5 text-white"></i>
                        </div>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Program Aktif</dt>
                            <dd class="text-lg font-medium text-gray-900">8</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                            <i data-lucide="calendar" class="w-5 h-5 text-white"></i>
                        </div>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Kegiatan</dt>
                            <dd class="text-lg font-medium text-gray-900">12</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-purple-500 rounded-md flex items-center justify-center">
                            <i data-lucide="bar-chart-3" class="w-5 h-5 text-white"></i>
                        </div>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Kegiatan Bulan Ini</dt>
                            <dd class="text-lg font-medium text-gray-900">5</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Kegiatan -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Kegiatan Terbaru</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Peringatan Maulid Nabi Muhammad SAW</p>
                            <p class="text-xs text-gray-500">28 Des 2024, 19:00</p>
                        </div>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Direncanakan
                        </span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Kajian Ahad Pagi</p>
                            <p class="text-xs text-gray-500">22 Des 2024, 06:00</p>
                        </div>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Selesai
                        </span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Pengajian Ibu-ibu</p>
                            <p class="text-xs text-gray-500">26 Des 2024, 14:00</p>
                        </div>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            Berlangsung
                        </span>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('admin.kegiatan') }}" class="text-sm text-emerald-600 hover:text-emerald-500">
                        Lihat semua kegiatan →
                    </a>
                </div>
            </div>
        </div>

        <!-- Active Programs -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Program Aktif</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">TPA Sore</p>
                            <p class="text-xs text-gray-500">Pendidikan • Senin-Jumat, 16:00-17:30</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs text-gray-500">Ustadz Abdullah</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Kajian Ahad Pagi</p>
                            <p class="text-xs text-gray-500">Keagamaan • Ahad, 06:00-07:00</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs text-gray-500">Ustadz Muhammad</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Santunan Yatim</p>
                            <p class="text-xs text-gray-500">Sosial • Setiap bulan</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs text-gray-500">Ibu Siti Aminah</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('admin.program') }}" class="text-sm text-emerald-600 hover:text-emerald-500">
                        Lihat semua program →
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
