<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::all();
        return view('setup.warehouse.index', compact('warehouses'));
    }

    public function create()
    {
        return view('setup.warehouse.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
        ]);

        Warehouse::create($validated);

        return redirect()->route('setup.warehouse.index')->with('success', 'Warehouse berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $warehouse = Warehouse::findOrFail($id);
        return view('setup.warehouse.edit', compact('warehouse'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
        ]);

        $warehouse = Warehouse::findOrFail($id);
        $warehouse->update($validated);

        return redirect()->route('setup.warehouse.index')->with('success', 'Warehouse berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->delete();

        return redirect()->route('setup.warehouse.index')->with('success', 'Warehouse berhasil dihapus.');
    }
}
