<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;

use Illuminate\Http\Request;

use Illuminate\Support\facades\db;

class PegawaiController extends Controller
{
    public function index()
    {
        $judul ="Pegawai";
        $data = Pegawai::all();
        return view("Pegawai.tampil",compact('data','judul'));
    }

    public function create()
    {
        $judul = "Pegawai";
        return view('Pegawai.input', compact('judul'));
    }

    public function store(Request $request)
    {
        DB::table('pegawais')->insert([
            'nama_pegawai' => $request ->nama_pegawai,
            'nip' => $request->nip,
            'alamat' => $request->alamat

        ]);
        return redirect('/Pegawai');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $judul ="Pegawai";
        $data = DB::table('pegawais')->where('id_pegawai',$id)->get();
        return view('Pegawai.edit',['pegawais' => $data], compact('judul'));
    }

    public function update(Request $request)
    {
        DB ::table('pegawais')->where('id_pegawai',$request->id)->update ([
            'nama_pegawai' => $request ->nama_pegawai,
            'nip' => $request->nip,
            'alamat' => $request->alamat

        ]);
        return redirect('/Pegawai');
    }

    public function destroy(string $id)
    {
        DB::table('pegawais')->where('id_pegawai',$id)->delete();

        return redirect('/Pegawai');
    }

}
