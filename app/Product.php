<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nama', 'stok', 'deskripsi', 'gambar', 'harga', 'harga_diskon'];
}
