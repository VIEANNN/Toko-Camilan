@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-gray-800 text-white p-6 rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Edit Warehouse</h1>

        <form action="{{ route('setup.warehouse.update', $warehouse->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="block text-sm font-semibold">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ $warehouse->nama }}" class="w-full px-4 py-2 border rounded bg-white text-gray-800" required>
            </div>

            <div class="mb-4">
                <label for="lokasi" class="block text-sm font-semibold">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" value="{{ $warehouse->lokasi }}" class="w-full px-4 py-2 border rounded bg-white text-gray-800" required>
            </div>

            <div class="mb-4">
                <label for="kapasitas" class="block text-sm font-semibold">Kapasitas</label>
                <input type="number" id="kapasitas" name="kapasitas" value="{{ $warehouse->kapasitas }}" class="w-full px-4 py-2 border rounded bg-white text-gray-800" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded">Update</button>
        </form>
    </div>
@endsection