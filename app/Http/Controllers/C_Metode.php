<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Metode;

class C_Metode extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function admin()
    {
        $listMetode = M_Metode::all();
        return view('admin/admin', compact('listMetode')); // buat return ke index dengan passing parameter
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new M_Metode;
        return view('admin/metodeCreate', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new M_Metode;
        $model->nama_metode = $request->nama_metode;
        $model->biaya_administrasi = $request->biaya_administrasi;

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
