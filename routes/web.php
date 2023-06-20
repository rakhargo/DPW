<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\C_Utama;
use App\Http\Controllers\C_Metode;
use App\Http\Controllers\C_Voucher;
use App\Http\Controllers\C_Pesanan;
use App\Http\Controllers\C_Session;


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
Route::get('/tabAdmin', [C_Utama::class, 'admin']);

Route::get('/tabDetails/{id}', [C_Utama::class, 'getId']);
Route::get('/metodeEdit/{id}', [C_Metode::class, 'edit']);
Route::get('/kategoriEdit/{id}', [C_Utama::class, 'edit']);
Route::get('/voucherKategori/{id}', [C_Voucher::class, 'voucherKategori']);
Route::get('/voucherEdit/{id}/{idkat}', [C_Voucher::class, 'edit']);

// Route::get('/tabRiwayat', [C_Utama::class, 'getId']);
Route::get('/tabRiwayat', [C_Pesanan::class, 'getEmail']);
// Route::get('/', function () {
//     // Route::resource('kategori', C_Utama::class);
//     // $datas = ;

//     // return view('index', compact('datas'));
//     return $datas;
// });

Route::resource('/kategori', C_Utama::class);
Route::resource('/pesanan', C_Pesanan::class);
Route::resource('/metode', C_Metode::class);
Route::resource('/voucher', C_Voucher::class);

// Route get => pegawai/{id}/edit => edit
Route::get('/tabVoucher', function () {
    return view('tabVoucher');
});
Route::get('/voucherCreate/{id}', [C_Voucher::class, 'create']);

// Route::get('/tabDetails/{id}', function () {
//     $id = $_GET['id'];
//     return view('tabDetails', ['id' => $id]); 
// });

Route::get('/tabLacak', function () {
    return view('tabLacak');
});


// Route::get('/tabAdmin', function () {
//     return view('admin/admin');
// });

Route::get('/images', function () {
    return assets('admin/admin');
});

Route::get('/kategoriCreate', function () {
    return view('admin/kategoriCreate');
});
Route::get('/metodeCreate', function () {
    return view('admin/metodeCreate');
});
Route::get('/loginadm', [C_Session::class, 'index']);
Route::get('/loginadm/logout', [C_Session::class, 'logout']);
Route::post('/loginadm/login', [C_Session::class, 'login']);
// Route::get('/metodeEdit/{id}', function () {
//     return view('admin/metodeEdit');
// });
