<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi; // ← ini yang benar

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaksi::query();

        if ($request->filled('tanggal_mulai') && $request->filled('tanggal_selesai')) {
            $query->whereBetween('created_at', [$request->tanggal_mulai, $request->tanggal_selesai]);
        }

        if ($request->filled('status') && $request->status != 'semua') {
            $query->where('status', $request->status);
        }

        $transaksi = $query->orderBy('created_at', 'desc')->get();

        return view('laporan.index', compact('transaksi'));

    }
}
