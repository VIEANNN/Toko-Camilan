@extends('layouts.app')

@section('content')
    <div class="p-4 max-w-lg mx-auto">
        <h1 class="text-xl font-bold mb-4">Tambah Kategori Camilan</h1>

        <form action="{{ route('kategori-camilan.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block font-medium">Nama</label>
                <input type="text" name="nama" class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block font-medium">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border rounded px-3 py-2" required></textarea>
            </div>

            <div>
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-black py-2 px-4 rounded">
                    Simpan
                </button>
                <a href="{{ route('kategori-camilan.index') }}" class="ml-2 text-gray-600 underline">Batal</a>
            </div>
        </form>
    </div>
@endsection
