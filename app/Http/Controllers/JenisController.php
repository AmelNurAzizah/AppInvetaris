<?php

namespace App\Http\Controllers;

use App\Models\Jenis;

use Illuminate\Http\Request;

use Illuminate\Support\facades\db;



class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul ="Jenis";
        $data = Jenis::all();
        return view("Jenis.tampil",compact('data','judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judul = "Jenis";
        return view('Jenis.input', compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('Jenis')->insert([
            'nama_jenis' => $request ->nama_jenis,
            'kode_jenis' => $request->kode_jenis,
            'keterangan' => $request->keterangan

        ]);
        return redirect('/Jenis');
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
        $judul ="Jenis";
        $data = DB::table('jenis')->where('id_jenis',$id)->get();
        return view('Jenis.edit',['jenis' => $data], compact('judul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB ::table('Jenis')->where('id_jenis',$request->id)->update ([
            'nama_jenis' => $request ->nama_jenis,
            'kode_jenis' => $request->kode_jenis,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/Jenis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('Jenis')->where('id_jenis',$id)->delete();

        return redirect('/Jenis');
    }
}
 