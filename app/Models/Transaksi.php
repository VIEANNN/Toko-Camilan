<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis'; // atau nama tabel kamu
    protected $fillable = ['nama_pembeli','nama_produk','jumlah', 'total_harga', 'status', 'created_at'];
}
