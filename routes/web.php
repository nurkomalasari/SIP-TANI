<?php

use App\Http\Controllers\Login;
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

Route::get('/welcome', [WellcomeController::class, 'index'])->name('welcome');

Route::get('/konsumen', function () {
       return view('konsumen');
     })->middleware('auth:konsumen');
Route::get('/mitra', function () {
       return view('mitra');
     })->middleware('auth:mitra');
Route::get('/admin', function () {
       return view('admin');
     })->middleware('auth:admin');

Route::group(['middleware'=>'guest'],function(){
Route::get('/masuk', [WellcomeController::class, 'login'])->name('login');

Route::post('/kirimdata', [Login::class, 'masuk']);
});
Route::get('/keluar', [Login::class, 'keluar']);

Route::get('/admin1', function () {
    return view('layouts.admin.master');

});
