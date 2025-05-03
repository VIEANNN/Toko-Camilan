@extends('layouts.app')

@section('content')
<div class="container mx-auto bg-gray-800 text-white p-6 rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Edit Pelanggan</h1>

    <form action="{{ route('setup.pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama" class="block text-sm font-semibold">Nama</label>
            <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border rounded bg-white text-gray-800" value="{{ old('nama', $pelanggan->nama) }}" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded bg-white text-gray-800" value="{{ old('email', $pelanggan->email) }}" required>
        </div>

        <div class="mb-4">
            <label for="telepon" class="block text-sm font-semibold">Telepon</label>
            <input type="text" id="telepon" name="telepon" class="w-full px-4 py-2 border rounded bg-white text-gray-800" value="{{ old('telepon', $pelanggan->telepon) }}" required>
        </div>

        <div class="mb-4">
            <label for="alamat" class="block text-sm font-semibold">Alamat</label>
            <textarea id="alamat" name="alamat" class="w-full px-4 py-2 border rounded bg-white text-gray-800">{{ old('alamat', $pelanggan->alamat) }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
