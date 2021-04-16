<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index(){

        $produk = Produk::paginate(6);
        return view('welcome1', compact('produk'));
    }
    public function login(){


        return view('login');
    }

}
