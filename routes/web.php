<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\C_Kategori;


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

Route::get('/', [C_Kategori::class, 'index']);

// Route::get('/', function () {
//     // Route::resource('kategori', C_Kategori::class);
//     // $datas = ;

//     // return view('index', compact('datas'));
//     return $datas;
// });

Route::get('/tabVoucher', function () {
    return view('tabVoucher');
});

Route::get('/tabDetails', function () {
    $id = $_GET['id'];
    return view('tabDetails', ['id' => $id]); 
});

Route::get('/tabRiwayat', function () {
    return view('tabRiwayat');
});

Route::get('/tabAdmin', function () {
    return view('admin/admin');
});

Route::get('/images', function () {
    return assets('admin/admin');
});

Route::resource('/kategori', C_Kategori::class);