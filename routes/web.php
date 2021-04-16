<?php

use App\Http\Controllers\DKonsumenController;
use App\Http\Controllers\DMitraController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Login;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WellcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Auth::routes();
// Route::get('/admin', function () {
//     return view('admin');
//   })->middleware('auth:admin');

Route::get('/', [WellcomeController::class, 'index'])->name('welcome');



Route::group(['middleware'=>'auth:mitra'],function(){
    Route::get('/mitra', [DMitraController::class, 'dashboard']);
    // Kategori
    Route::get('/mitra/kategori',[KategoriController::class, 'index']);
    Route::get('/mitra/tambah_kategori',[KategoriController::class, 'create']);
    Route::post('mitra/kategori/store',[KategoriController::class, 'store']);
    Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit']);
    Route::put('mitra/kategori/update/{id}',[KategoriController::class, 'update']);
    Route::get('/kategori/delete/{id}',[KategoriController::class, 'destroy']);
    //Produk
    Route::get('/mitra/produk',[ProdukController::class, 'index']);
    Route::get('/mitra/tambah_pupuk',[ProdukController::class, 'create']);
    Route::post('/mitra/produk/store',[ProdukController::class, 'store']);
    Route::get('/pupuk/edit/{id}',[ProdukController::class, 'edit']);
    Route::put('/mitra/update_pupuk/{id}',[ProdukController::class, 'update']);
    Route::get('/pupuk/delete/{id}',[ProdukController::class, 'delete']);
    // Konsumen
    Route::get('/pelanggan',[DKonsumenController::class, 'index']);
    // Route::get('/mitra/tambah_pupuk',[ProdukController::class, 'create']);
    // Route::post('/mitra/produk/store',[ProdukController::class, 'store']);
    Route::get('/konsumen/edit/{id}',[DKonsumenController::class, 'edit']);
    Route::put('/konsumen/update/{id}',[DKonsumenController::class, 'update']);
    Route::get('/konsumen/delete/{id}',[DKonsumenController::class, 'destroy']);


});
Route::group(['middleware'=>'auth:konsumen'],function(){
    Route::get('/konsumen', [DKonsumenController::class, 'konsumen']);
});

Route::group(['middleware'=>'guest'],function(){
    Route::get('/masuk', [WellcomeController::class, 'login']);
    Route::post('/kirimdata', [Login::class, 'masuk']);
    Route::get('/register', [Login::class, 'register']);
    Route::post('/register/konsumen', [Login::class, 'store']);
});
Route::get('/keluar', [Login::class, 'keluar']);


