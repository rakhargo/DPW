<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Kategori;
use App\Models\M_Voucher;
 
class C_Utama extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()     
    {
        $datas = M_Kategori::all();

        return view('index', compact('datas')); // buat return ke index dengan passing parameter
    }

    public function getId($id)
    {
        $data_join = M_Kategori::join('t_voucher', 't_kategori.id_kategori', '=', 't_voucher.id_kategori')
        ->where('t_voucher.id_kategori', '=', $id)
        ->select('t_kategori.nama_kategori', 't_kategori.gambar_kategori', 't_voucher.id_kategori', 't_voucher.nominal_voucher', 't_voucher.harga_voucher')
        ->get();
        $data_condition = M_Kategori::where('id_kategori', $id)->first(); // ini syntax buat misal manggil where

        return view('tabDetails', compact('data_condition'), compact('data_join')); // buat return ke index dengan passing parameter
    }

    // public function

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new M_Kategori;
        $model->nama_kategori = "ytta";
        if ($model->save()) {
            return "Data ". $model ." Berhasil disimpan";
        }
        else {
            return "Data ". $model ." Gagal disimpan";
        }
        // coba jalanin ke port/kategori/create  gabisa, soalnya gada column updated sama create, harus ditambah
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
