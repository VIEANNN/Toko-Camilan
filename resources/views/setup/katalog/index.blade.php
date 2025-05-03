@extends('layouts.app')

@section('content')
<div class="container mx-auto bg-gray-800 text-white p-6 rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Daftar Katalog</h1>

    <!-- Tombol Tambah Katalog -->
    <a href="{{ route('setup.katalog.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Katalog</a>

    <table class="w-full text-white">
        <thead>
            <tr>
                <th class="text-left py-2">Nama</th>
                <th class="text-left py-2">Deskripsi</th>
                <th class="text-left py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($katalog as $item)
                <tr class="border-t border-gray-600">
                    <td class="py-2">{{ $item->nama }}</td>
                    <td class="py-2">{{ $item->deskripsi }}</td>
                    <td class="py-2 space-x-2">
                        <a href="{{ route('setup.katalog.edit', $item->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>

                        <!-- Tombol Hapus -->
                        <form id="delete-form-{{ $item->id }}" action="{{ route('setup.katalog.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete({{ $item->id }})" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data katalog akan dihapus permanen!",
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
