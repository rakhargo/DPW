<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\M_Pesanan;
use App\Models\M_Voucher;
use App\Models\M_Metode;
use App\Models\M_Kategori;
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
        $postEmail = $request->email;
        $data_join = M_Pesanan::join('t_voucher', 't_pesanan.id_voucher', '=', 't_voucher.id')
        ->join('t_kategori', 't_pesanan.id_kategori', '=', 't_kategori.id')
        ->join('t_metode', 't_pesanan.id_metode', '=', 't_metode.id')
        ->where('email', $request->email)
        ->select('t_pesanan.id','t_pesanan.id_kategori', 't_kategori.nama_kategori', 't_kategori.gambar_kategori', 't_pesanan.id_voucher', 't_voucher.nominal_voucher', 't_voucher.harga_voucher', 't_pesanan.id_metode', 't_metode.nama_metode', 't_pesanan.total_harga', 't_pesanan.waktu_pesanan')
        ->get();
        return view('tabRiwayat', compact('data_join', 'postEmail'));
    }
    
    public function confirm(Request $request)
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
        
        $kategori = M_Kategori::where('id', $request->id_kategori)->first();
        $metode = M_Metode::where('id', $id_metode)->first();
        $voucher = M_Voucher::where('id', $id_voucher)->first();
        
        return view('tabConfirmPesanan', compact('model', 'kategori', 'metode', 'voucher'));
    }
    
    public function store(Request $request)
    {
        $model = new M_Pesanan;
        $model->id_kategori = $request->kategori;
        $model->id_voucher = $request->voucher;
        $model->id_metode = $request->metode;
        $model->total_harga = $request->total_harga;
        $model->email = $request->email;
        $model->waktu_pesanan = Carbon::now()->format('Y-m-d H:i:s');
        
        $kategori = M_Kategori::where('id', $request->kategori)->first();
        $metode   = M_Metode::where('id', $request->metode)->first();
        $voucher  = M_Voucher::where('id', $request->voucher)->first();

        $codeLength = 16;
        $sectionLength = 4;
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $sections = [];

        for ($i = 0; $i < $codeLength; $i += $sectionLength) 
        {
            $section = '';
            for ($j = 0; $j < $sectionLength; $j++) 
            {
                $section .= $alphabet[random_int(0, strlen($alphabet) - 1)];
            }
            $sections[] = $section;
        }

        $randomCode = implode('-', $sections);
        
        $model->save();
        return view('tabInvoice', compact('model', 'kategori', 'metode', 'voucher', 'randomCode'));
        // return redirect('/');
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
