<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventori extends Model
{
    protected $table = 'inventori';

    protected $fillable = [
        'nama',
        'stok',
        'satuan',
    ];
}
