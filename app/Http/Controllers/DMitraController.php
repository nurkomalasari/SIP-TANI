<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Konsumen;
use App\Models\Produk;
use Illuminate\Http\Request;

class DMitraController extends Controller
{
    public function dashboard(){

        $produk  = Produk::get();
        $kategori  = Kategori::get();
        $konsumen  = Konsumen::get();
        return view('mitra.mitra', compact('produk','kategori','konsumen'));
    }
}
