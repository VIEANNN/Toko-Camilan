@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-gray-800 text-white p-6 rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Tambah Katalog Camilan</h1>

        <form action="{{ route('setup.katalog.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-sm font-semibold">Nama Katalog</label>
                <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border rounded bg-white text-gray-800" required>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-semibold">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="w-full px-4 py-2 border rounded bg-white text-gray-800"></textarea>

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded">Simpan</button>
        </form>
    </div>
@endsection
