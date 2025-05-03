@extends('layouts.app')

@section('content')
<div class="container mx-auto bg-gray-800 text-white p-6 rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Edit Katalog</h1>

    <form action="{{ route('setup.katalog.update', $katalog->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama" class="block">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $katalog->nama) }}" class="w-full px-4 py-2 border rounded bg-white text-gray-800">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" class="w-full px-4 py-2 border rounded bg-white text-gray-800">{{ old('deskripsi', $katalog->deskripsi) }}</textarea>
        </div>

        <button type="submit" class="bg-green-500 px-4 py-2 rounded">Simpan Perubahan</button>
    </form>
</div>
@endsection
