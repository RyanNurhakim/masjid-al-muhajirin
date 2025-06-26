@extends('layouts.admin')

@section('title', 'Data Masjid')
@section('page-title', 'Data Masjid')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-xl font-semibold text-gray-900">Daftar Masjid</h2>
            <p class="text-sm text-gray-600">Kelola data masjid yang terdaftar</p>
        </div>
        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
            <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
            Tambah Masjid
        </button>
    </div>

    <!-- Table -->
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Masjid</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pengurus</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun Berdiri</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Masjid Al-Muhajirin</div>
                                <div class="text-sm text-gray-500">info@almuhajirin.org</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Jl. Raya Masjid No. 123, Kelurahan Sejahtera...</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">H. Ahmad Suharto</div>
                            <div class="text-sm text-gray-500">Ketua Takmir</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1985</td>
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