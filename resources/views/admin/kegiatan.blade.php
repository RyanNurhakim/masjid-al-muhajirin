@extends('layouts.admin')

@section('title', 'Kegiatan Masjid')
@section('page-title', 'Kegiatan Masjid')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-xl font-semibold text-gray-900">Daftar Kegiatan</h2>
            <p class="text-sm text-gray-600">Kelola kegiatan-kegiatan masjid</p>
        </div>
        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
            <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
            Tambah Kegiatan
        </button>
    </div>

    <!-- Table -->
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kegiatan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal & Waktu</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tempat</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Peringatan Maulid Nabi Muhammad SAW</div>
                                <div class="text-sm text-gray-500">Ustadz Dr. Ahmad Syafi'i</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">28 Des 2024, 19:00</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Masjid Al-Muhajirin</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Direncanakan
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button class="text-emerald-600 hover:text-emerald-900">
                                    <i data-lucide="eye" class="w-4 h-4"></i>
                                </button>
                                <button class="text-indigo-600 hover:text-indigo-900">
                                    <i data-lucide="edit" class="w-4 h-4"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Buka Puasa Bersama</div>
                                <div class="text-sm text-gray-500">Ustadz Abdullah</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">15 Nov 2024, 17:30</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Halaman Masjid Al-Muhajirin</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Selesai
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button class="text-emerald-600 hover:text-emerald-900">
                                    <i data-lucide="eye" class="w-4 h-4"></i>
                                </button>
                                <button class="text-indigo-600 hover:text-indigo-900">
                                    <i data-lucide="edit" class="w-4 h-4"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Pengajian Ibu-ibu</div>
                                <div class="text-sm text-gray-500">Ustadzah Fatimah</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">26 Des 2024, 14:00</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Ruang Serbaguna Masjid</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Berlangsung
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button class="text-emerald-600 hover:text-emerald-900">
                                    <i data-lucide="eye" class="w-4 h-4"></i>
                                </button>
                                <button class="text-indigo-600 hover:text-indigo-900">
                                    <i data-lucide="edit" class="w-4 h-4"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Shalat Tarawih</div>
                                <div class="text-sm text-gray-500">Ustadz Muhammad</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">10 Mar 2024, 20:00</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Masjid Al-Muhajirin</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Selesai
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button class="text-emerald-600 hover:text-emerald-900">
                                    <i data-lucide="eye" class="w-4 h-4"></i>
                                </button>
                                <button class="text-indigo-600 hover:text-indigo-900">
                                    <i data-lucide="edit" class="w-4 h-4"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection