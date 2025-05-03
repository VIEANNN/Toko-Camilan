<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('setup.pelanggan.index', compact('pelanggan'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setup.pelanggan.create'); // Pastikan view yang benar
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggans,email',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        Pelanggan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('setup.pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('setup.pelanggan.edit', compact('pelanggan'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggans,email,' . $id,
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        // Cari pelanggan berdasarkan ID dan update
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        // Redirect setelah berhasil
        return redirect()->route('setup.pelanggan.index')->with('success', 'Pelanggan berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari pelanggan berdasarkan ID
        $pelanggan = Pelanggan::findOrFail($id);

        // Hapus pelanggan
        $pelanggan->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('setup.pelanggan.index')->with('success', 'Pelanggan berhasil dihapus!');
    }
}
