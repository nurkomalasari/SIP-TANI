<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'id','nama_pupuk','gambar','deskripsi_obat','stok','keunggulan','komposisi','penggunaan','kategori_id','harga'
    ];

    public function kategori(){
    	return $this->belongsTo('App\Models\Kategori');
    }
}
