@extends('layouts.app')

@section('content')
    <div class="p-4">
        <h1 class="text-xl font-bold mb-4">Kategori Camilan</h1>

        <a href="{{ route('kategori-camilan.create') }}" class="bg-blue-500 hover:bg-blue-600 text-black font-semibold py-2 px-4 rounded mb-4 inline-block">
            + Tambah Kategori
        </a>

        <table class="table-auto w-full border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $item)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $item->nama }}</td>
                        <td class="border px-4 py-2">{{ $item->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
