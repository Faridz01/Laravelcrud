<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['nama_pembeli', 'nama_barang', 'jumlah_harga', 'harga_satuan', 'tgl_pembelian', 'total_harga'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
}
