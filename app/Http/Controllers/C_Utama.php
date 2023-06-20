<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Kategori;
use App\Models\M_Voucher;
use App\Models\M_Pesanan;
use App\Models\M_Metode;
use File;
 
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
    public function admin()
    {
        $listKategori = M_Kategori::all();
        $listMetode = M_Metode::all();
        $listPesanan = M_Pesanan::all();
        return view('admin/admin', compact('listKategori','listMetode', 'listPesanan')); // buat return ke index dengan passing parameter
    }

    public function show_allPesanan(){


    }
    public function getId($id)
    {
        $data_join = M_Kategori::join('t_voucher', 't_kategori.id_kategori', '=', 't_voucher.id_kategori')
        ->where('t_voucher.id_kategori', '=', $id)
        ->select('t_kategori.id_kategori', 't_voucher.id_voucher', 't_kategori.nama_kategori', 't_kategori.gambar_kategori', 't_voucher.id_kategori', 't_voucher.nominal_voucher', 't_voucher.harga_voucher')
        ->get();
        $data_condition = M_Kategori::where('id_kategori', $id)->first(); // ini syntax buat misal manggil where
        $data_metode = M_Metode::all();
        $datas = [
            'join' => $data_join,
            'condition' => $data_condition,
            'metode' => $data_metode
        ];
        return view('tabDetails', compact('datas')); // buat return ke index dengan passing parameter
    }

    // public function

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new M_Kategori;
        return view('admin/kategoriCreate', compact('model'));
        // coba jalanin ke port/kategori/create  gabisa, soalnya gada column updated sama create, harus ditambah
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'gambar_kategori' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $imageName = time().'.'.$request->gambar_kategori->extension();
        $request->gambar_kategori->move(public_path('assets/imagesdb/'), $imageName);
        
        $model = new M_Kategori;
        $model->nama_kategori = $request->nama_kategori;
        $model->gambar_kategori = $imageName;

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
    public function edit(string $id)
    {
        $model = M_Kategori::find($id);
        return view('admin/kategoriEdit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'nama_kategori' => 'required',
        //     'gambar_kategori' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        // ]);

        $model = M_Kategori::find($id);
        $model->nama_kategori = $request->nama_kategori;
        // $model->gambar_kategori = $request->gambar_kategori;
        echo $request->hasFile('gambar_kategori');
        if ($request->hasFile('gambar_kategori')) {
            $imageName = time().'.'.$request->gambar_kategori->extension();
            $request->gambar_kategori->move(public_path('assets/imagesdb/'), $imageName);
            $model->gambar_kategori = $imageName;
        }

        $model->save();
        return redirect('/tabAdmin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = M_Kategori::find($id);
        $image_path = public_path('/assets/imagesdb/'.$model->gambar_kategori);
        File::delete($image_path);
        $model->delete();
        return redirect('/tabAdmin');
    }
}
