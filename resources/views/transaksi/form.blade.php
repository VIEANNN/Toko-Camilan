<div class="mb-3">
    <label>Nama Pembeli</label>
    <input type="text" name="nama_pembeli" class="form-control" value="{{ old('nama_pembeli', $transaksi->nama_pembeli ?? '') }}">
</div>

<div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk', $transaksi->nama_produk ?? '') }}">
</div>

<div class="mb-3">
    <label>Jumlah</label>
    <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah', $transaksi->jumlah ?? '') }}">
</div>

<div class="mb-3">
    <label>Total Harga</label>
    <input type="number" name="total_harga" class="form-control" value="{{ old('total_harga', $transaksi->total_harga ?? '') }}">
</div>
