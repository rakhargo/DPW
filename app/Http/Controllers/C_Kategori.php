<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Kategori;
 
class C_Kategori extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()     
    {
        $datas = M_Kategori::all();
        // $data_condition = M_Kategori::where("id_kategori", "=", "1")->get(); // ini syntax buat misal manggil where
        // return $datas; // return nya data_condition kalo mau spesifik
        return view('index', compact('datas')); // buat return ke index dengan passing parameter
    }

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
