@extends('layouts.app')

@section('content')
<div class="container mx-auto bg-gray-800 text-white p-6 rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Daftar Pelanggan</h1>

    <a href="{{ route('setup.pelanggan.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Pelanggan</a>

    <table class="w-full text-white">
        <thead>
            <tr>
                <th class="text-left">Nama</th>
                <th class="text-left">Email</th>
                <th class="text-left">Telepon</th>
                <th class="text-left">Alamat</th>
                <th class="text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $item)
            <tr class="border-t border-gray-600">
                <td class="py-2">{{ $item->nama }}</td>
                <td class="py-2">{{ $item->email }}</td>
                <td class="py-2">{{ $item->telepon }}</td>
                <td class="py-2">{{ $item->alamat }}</td>
                <td class="py-2">
                    <a href="{{ route('setup.pelanggan.edit', $item->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>

                    <!-- Tombol Hapus dengan SweetAlert -->
                    <button onclick="confirmDelete({{ $item->id }})" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
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
            title: 'Apakah Anda yakin?'
            , text: "Data pelanggan ini akan dihapus!"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonText: 'Hapus'
            , cancelButtonText: 'Batal'
            , reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Membuat form untuk mengirim permintaan DELETE
                var form = document.createElement('form');
                form.action = '/setup/pelanggan/' + id; // Sesuaikan dengan route yang benar
                form.method = 'POST'; // Gunakan POST karena Laravel memerlukan POST untuk DELETE

                // Menambahkan CSRF token
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                var csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = csrfToken;
                form.appendChild(csrfInput);

                // Menambahkan input untuk method DELETE
                var methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                // Submit form secara otomatis
                document.body.appendChild(form);
                form.submit();
            }
        });
    }

</script>
@endsection
