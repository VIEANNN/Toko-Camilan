@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-gray-800 text-white p-6 rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Daftar Inventori</h1>

        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Barang</a>

        <table class="w-full text-white">
            <thead>
                <tr>
                    <th class="text-left">Nama Barang</th>
                    <th class="text-left">Stok</th>
                    <th class="text-left">Satuan</th>
                    <th class="text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($inventori as $item)
                    <tr class="border-t border-gray-600">
                        <td class="py-2">{{ $item->nama }}</td>
                        <td class="py-2">{{ $item->stok }}</td>
                        <td class="py-2">{{ $item->satuan }}</td>
                        <td class="py-2">
                            <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                            <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="py-2">Belum ada data inventori.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
