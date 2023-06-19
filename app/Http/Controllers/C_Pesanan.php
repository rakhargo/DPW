<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\M_Pesanan;
use Carbon\Carbon;

class C_Pesanan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getEmail(Request $request)
    {
        $data_condition = M_Pesanan::where('email', $request->email)->get(); // ini syntax buat misal manggil where
        return view('tabRiwayat', compact('data_condition'));
    }

    public function store(Request $request)
    {
        $selectedItemVoucher = explode('|', $request->voucher);
        $id_voucher = $selectedItemVoucher[0]; // Mendapatkan ID
        $harga_voucher = $selectedItemVoucher[1]; // Mendapatkan harga

        $selectedItemMetode = explode('|', $request->metode);
        $id_metode = $selectedItemMetode[0]; // Mendapatkan ID
        $biaya_admin = $selectedItemMetode[1]; // Mendapatkan harga

        $model = new M_Pesanan;
        $model->id_kategori = $request->id_kategori;
        $model->id_voucher = $id_voucher;
        $model->id_metode = $id_metode;
        $model->total_harga = $harga_voucher + $biaya_admin;
        $model->email = $request->email;
        $model->waktu_pesanan = Carbon::now()->format('Y-m-d H:i:s');

        $model->save();
        return redirect('/');
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
