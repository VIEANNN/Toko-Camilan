<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Setup\KategoriCamilanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Transaksi\PenjualanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\SettingsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Setup
    Route::prefix('setup')->group(function () {
        Route::resource('kategori-camilan', KategoriCamilanController::class);
        Route::resource('kategori', KategoriController::class);
    });

    // Transaksi (pakai PenjualanController)
    Route::resource('transaksi', PenjualanController::class)->middleware('auth');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index')->middleware('auth');
    Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik.index')->middleware('auth');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index')->middleware('auth');
});

require __DIR__.'/auth.php';
