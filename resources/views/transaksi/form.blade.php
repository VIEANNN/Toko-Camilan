<form action="{{ isset($transaksi) ? route('transaksis.update', $transaksi->id) : route('transaksis.store') }}" method="POST">
    @csrf
    @if(isset($transaksi))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
        <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" 
               value="{{ old('nama_pembeli', $transaksi->nama_pembeli ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="nama_produk" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control" 
               value="{{ old('nama_produk', $transaksi->nama_produk ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" name="jumlah" id="jumlah" class="form-control" 
               value="{{ old('jumlah', $transaksi->jumlah ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="total_harga" class="form-label">Total Harga</label>
        <input type="number" name="total_harga" id="total_harga" class="form-control" 
               value="{{ old('total_harga', $transaksi->total_harga ?? '') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">
        {{ isset($transaksi) ? 'Update' : 'Simpan' }}
    </button>
</form>
