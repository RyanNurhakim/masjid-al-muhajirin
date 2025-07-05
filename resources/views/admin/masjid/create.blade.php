@extends('layouts.admin')

@section('title', 'Tambah Informasi')
@section('page-title', 'Tambah Masjid')

@section('content')
<div class="space-y-6">
    <h2 class="text-xl font-semibold text-gray-900">Tambah Informasi Masjid</h2>
    <form action="" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama Masjid</label>
            <input type="text" id="nama" name="nama" required class="bg-white border border-emerald-500 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-3 shadow-sm focus:shadow-emerald-700 transition duration-200" placeholder="Masjid Al-Muhajirin">
            @error('nama')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required class="bg-white border border-emerald-500 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-3 shadow-sm focus:shadow-emerald-700 transition duration-200" placeholder="Jl. Raya Masjid No. 123, Kelurahan Sejahtera..."></textarea>
            @error('alamat')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tahun_berdiri">Tahun Berdiri</label>
            <input type="number" id="tahun_berdiri" name="tahun_berdiri" required class="bg-white border border-emerald-500 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-3 shadow-sm focus:shadow-emerald-700 transition duration-200" placeholder="1985">
            @error('tahun_berdiri')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
            <input type="email" id="email" name="email" required class="bg-white border border-emerald-500 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-3 shadow-sm focus:shadow-emerald-700 transition duration-200" placeholder="info@almuhajirin.org">
            @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                Tambah Masjid
            </button>
        </div>
    </form>
</div>
@endsection