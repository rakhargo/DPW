<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\C_Utama;
use App\Http\Controllers\C_Metode;
use App\Http\Controllers\C_Pesanan;


/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [C_Utama::class, 'index']);

Route::get('/tabDetails/{id}', [C_Utama::class, 'getId']);

// Route::get('/', function () {
//     // Route::resource('kategori', C_Utama::class);
//     // $datas = ;

//     // return view('index', compact('datas'));
//     return $datas;
// });

Route::resource('/kategori', C_Utama::class);
Route::resource('/pesanan', C_Pesanan::class);
Route::resource('/metode', C_Metode::class);


Route::get('/tabVoucher', function () {
    return view('tabVoucher');
});

// Route::get('/tabDetails/{id}', function () {
//     $id = $_GET['id'];
//     return view('tabDetails', ['id' => $id]); 
// });

Route::get('/tabRiwayat', function () {
    return view('tabRiwayat');
});

Route::get('/tabAdmin', function () {
    return view('admin/admin');
});

Route::get('/images', function () {
    return assets('admin/admin');
});

Route::get('/kategoriCreate', function () {
    return view('admin/kategoriCreate');
});
Route::get('/metodeCreate', function () {
    return view('admin/Create');
});