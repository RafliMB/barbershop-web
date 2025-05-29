<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // Opsional, karena otomatis Laravel akan cari table 'products'
    protected $fillable = ['nama', 'deskripsi', 'harga', 'gambar']; // biar bisa mass assign
}
