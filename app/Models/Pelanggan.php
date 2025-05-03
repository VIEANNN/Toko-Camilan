<?php

// app/Models/Pelanggan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Pastikan field yang kamu masukkan di sini sesuai dengan yang ada di database
    protected $fillable = [
        'nama', 'email', 'telepon', 'alamat',
    ];
}