<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\KategoriCamilan;
use Illuminate\Http\Request;

class KategoriCamilanController extends Controller
{
    // Menampilkan daftar semua kategori camilan
    public function index()
    {
        $kategori = KategoriCamilan::all();
        return view('setup.kategori-camilan.index', compact('kategori'));
    }

    // Menampilkan form untuk menambahkan kategori baru
    public function create()
    {
        return view('setup.kategori-camilan.create');
    }

    // Menyimpan kategori baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:255',
        ]);

        KategoriCamilan::create($validated);

        return redirect()->route('kategori-camilan.index')->with('success', 'Kategori camilan berhasil ditambahkan.');
    }

    // Menampilkan form edit berdasarkan ID
    public function edit($id)
    {
        $kategori = KategoriCamilan::findOrFail($id);
        return view('setup.kategori-camilan.edit', compact('kategori'));
    }

    // Memperbarui data kategori
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:255',
        ]);

        $kategori = KategoriCamilan::findOrFail($id);
        $kategori->update($validated);

        return redirect()->route('kategori-camilan.index')->with('success', 'Kategori camilan berhasil diperbarui.');
    }

    // Menghapus data kategori
    public function destroy($id)
    {
        $kategori = KategoriCamilan::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori-camilan.index')->with('success', 'Kategori camilan berhasil dihapus.');
    }
}
