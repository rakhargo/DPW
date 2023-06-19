<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Voucher;
use App\Models\M_Pesanan;
use App\Models\M_Metode;
use App\Models\M_Kategori;

class C_Voucher extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function voucherKategori($id)
    {   
        $listVoucher = M_Voucher::where('id_kategori', $id)->get();
        $kategori = M_Kategori::find($id);
        return view('admin/voucher', compact('listVoucher', 'kategori')); // buat return ke index dengan passing parameter
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new M_Voucher;
        return view('admin/Create', compact('model'));
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
