<?php

namespace App\Http\Controllers;

use App\Models\KategoriCamilan; // Pastikan ini sudah diimport
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil jumlah kategori camilan
        $kategoriCount = KategoriCamilan::count(); // Sesuaikan dengan model yang kamu gunakan
        
        // Kirimkan data ke view
        return view('dashboard', compact('kategoriCount'));
    }
}
