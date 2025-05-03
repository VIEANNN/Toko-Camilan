@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-gray-800 text-white p-6 rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Hapus Katalog Camilan</h1>

        <p>Apakah Anda yakin ingin menghapus katalog <strong>{{ $kategori->nama }}</strong>?</p>

        <form action="{{ route('setup.katalog.destroy', $kategori->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded">Hapus</button>
            <a href="{{ route('setup.katalog.index') }}" class="bg-gray-500 text-gray-800 px-6 py-2 rounded">Batal</a>
        </form>
    </div>
@endsection
