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
    public function store(Request $request)
    {
        $model = new M_Pesanan;
        $model->id_kategori = $request->id_kategori;
        $model->id_voucher = $request->id_voucher;
        $model->id_metode = $request->id_metode;
        $model->total_harga = 1000;
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
