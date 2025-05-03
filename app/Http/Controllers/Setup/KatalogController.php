<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\KategoriCamilan;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $katalog = KategoriCamilan::all();  // Ganti kategori jadi katalog
        return view('setup.katalog.index', compact('katalog'));  // Ganti kategori jadi katalog
    }

    public function create()
    {
        return view('setup.katalog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:255',
        ]);

        KategoriCamilan::create($validated);

        return redirect()->route('setup.katalog.index')->with('success', 'Katalog berhasil ditambahkan.');  // Ganti kategori jadi katalog
    }

    public function edit($id)
    {
        $katalog = KategoriCamilan::findOrFail($id);  // Ganti kategori jadi katalog
        return view('setup.katalog.edit', compact('katalog'));  // Ganti kategori jadi katalog
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:255',
        ]);

        $katalog = KategoriCamilan::findOrFail($id);  // Ganti kategori jadi katalog
        $katalog->update($validated);

        return redirect()->route('setup.katalog.index')->with('success', 'Katalog berhasil diperbarui.');  // Ganti kategori jadi katalog
    }

    public function destroy($id)
    {
        $katalog = KategoriCamilan::findOrFail($id);  // Ganti kategori jadi katalog
        $katalog->delete();

        return redirect()->route('setup.katalog.index')->with('success', 'Katalog berhasil dihapus.');  // Ganti kategori jadi katalog
    }
    
}



