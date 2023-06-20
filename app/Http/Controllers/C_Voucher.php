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
    public function index()
    {
        $model = M_Voucher::all();
        return view('admin/voucher', compact('model'));
    }
    public function voucherKategori($id)
    {   
        $listVoucher = M_Voucher::where('id_kategori', $id)->get();
        $kategori = M_Kategori::where('id', $id)->first();
        $title = $kategori->nama_kategori;
        $idkat = $kategori->id;
        return view('admin/voucher', compact('listVoucher', 'title', 'idkat')); // buat return ke index dengan passing parameter
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $model = new M_Voucher;
        $kategori = M_Kategori::where('id', $id)->first();
        return view('admin/voucherCreate', compact('model', 'kategori'));
    }

    /**
     * Store a newly crehphated resource in storage.
     */
    public function store(Request $request)
    {
        $model = new M_Voucher;
        $model->id_kategori = $request->id_kategori;
        $model->nominal_voucher = $request->nominal_voucher;
        $model->harga_voucher = $request->harga_voucher;

        $model->save();
        return redirect('/tabAdmin');
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
    public function edit(string $id, $idkat)
    {
        $model = M_Voucher::find($id);
        $kategori = M_Kategori::where('id', $id)->first();
        return view('admin/voucherEdit', compact('model', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = M_Voucher::find($id);
        $model->id_kategori = $request->id_kategori;
        $model->nominal_voucher = $request->nominal_voucher;
        $model->harga_voucher = $request->harga_voucher;

        $model->save();
        return redirect('/tabAdmin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = M_Voucher  ::find($id);
        $model->delete();
        return redirect('/tabAdmin');
    }
}
