<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/masjid', function () {
        return view('admin.masjid.index');
    })->name('masjid');

    Route::get('/program', function () {
        return view('admin.program.index');
    })->name('program');

    Route::get('/kegiatan', function () {
        return view('admin.kegiatan.index');
    })->name('galeri-kegiatan');

    Route::get('/donasi', function () {
        return view('admin.donasi.index');
    })->name('dashboard-donasi');
});

// Fallback route for 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
})->name('404');
