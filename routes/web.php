<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\Transaksi\PenjualanController;
use App\Http\Controllers\Transaksi\LaporanController;

// Setup Controllers
use App\Http\Controllers\Setup\{
    KatalogController,
    InventoriController,
    WarehouseController,
    PelangganController,
    MarketingController,
    KurirController,
    JasaController,
    ToolsController
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ===================== //
    //      Modul Setup      //
    // ===================== //
    Route::prefix('setup')->name('setup.')->group(function () {
        Route::resource('katalog', KatalogController::class)->names([
            'index' => 'katalog.index',    // Menambahkan setup. di nama route
            'create' => 'katalog.create',  // Menambahkan setup. di nama route
            'store' => 'katalog.store',    // Menambahkan setup. di nama route
            'edit' => 'katalog.edit',      // Menambahkan setup. di nama route
            'update' => 'katalog.update',  // Menambahkan setup. di nama route
            'destroy' => 'katalog.destroy', // Menambahkan setup. di nama route
        ]);
        Route::resource('inventori', InventoriController::class)->names('inventori');
        Route::resource('warehouse', WarehouseController::class)->names('warehouse');
        Route::resource('pelanggan', PelangganController::class)->names([
            'index' => 'pelanggan.index',
            'create' => 'pelanggan.create',
            'store' => 'pelanggan.store',
            'edit' => 'pelanggan.edit',
            'update' => 'pelanggan.update',
            'destroy' => 'pelanggan.destroy',
    

        ]);
        
        Route::resource('marketing', MarketingController::class)->names('marketing');
        Route::resource('kurir', KurirController::class)->names('kurir');
        Route::resource('jasa', JasaController::class)->names('jasa');
        Route::resource('tools', ToolsController::class)->names('tools');
    });

    // ========================= //
    //        Transaksi          //
    // ========================= //
    Route::resource('transaksi', PenjualanController::class)->names('transaksi');

    // ========================= //
    //  Laporan dan Pengaturan   //
    // ========================= //
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik.index');
});

Route::delete('setup/pelanggan/{pelanggan}', [PelangganController::class, 'destroy'])->name('setup.pelanggan.destroy');

require __DIR__.'/auth.php';
