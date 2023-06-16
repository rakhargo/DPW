<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/tabVoucher', function () {
    return view('tabVoucher');
});

Route::get('/tabDetails', function () {
    $id = $_GET['id'];
    // print_r($_GET);
    return view('tabDetails', ['id' => $id]); 
});

Route::get('/tabRiwayat', function () {
    return view('tabRiwayat');
});

Route::get('/tabAdmin', function () {
    return view('admin/admin');
});
