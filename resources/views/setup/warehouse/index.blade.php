@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-gray-800 text-white p-6 rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Daftar Warehouse</h1>

        <a href="{{ route('setup.warehouse.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Warehouse</a>

        <table class="w-full text-white">
            <thead>
                <tr>
                    <th class="text-left">Nama</th>
                    <th class="text-left">Lokasi</th>
                    <th class="text-left">Kapasitas</th>
                    <th class="text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($warehouses as $warehouse)
                    <tr class="border-t border-gray-600">
                        <td class="py-2">{{ $warehouse->nama }}</td>
                        <td class="py-2">{{ $warehouse->lokasi }}</td>
                        <td class="py-2">{{ $warehouse->kapasitas }}</td>
                        <td class="py-2">
                            <a href="{{ route('setup.warehouse.edit', $warehouse->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                            <form id="delete-form-{{ $warehouse->id }}" action="{{ route('setup.warehouse.destroy', $warehouse->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $warehouse->id }})" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: "Data warehouse akan dihapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
@endsection
