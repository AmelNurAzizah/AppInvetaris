<?php

namespace App\Http\Controllers;

use App\Models\Ruang;

use Illuminate\Http\Request;

use Illuminate\Support\facades\db;


class RuangController extends Controller
{
    //
    public function index()
    {
        $judul ="Ruang";
        $data = Ruang::all();
        return view("Ruang.tampil",compact('data','judul'));
    }

    public function create()
    {
        $judul = "Ruang";
        return view('Ruang.input', compact('judul'));
    }

    public function store(Request $request)
    {
        DB::table('ruangs')->insert([
            'nama_ruang' => $request ->nama_ruang,
            'kode_ruang' => $request->kode_ruang,
            'keterangan' => $request->keterangan

        ]);
        return redirect('/Ruang');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $judul ="Ruang";
        $data = DB::table('ruangs')->where('id',$id)->get();
        return view('Ruang.edit',['ruangs' => $data], compact('judul'));
    }

    public function update(Request $request)
    {
        DB ::table('ruangs')->where('id',$request->id)->update ([
            'nama_ruang' => $request ->nama_ruang,
            'kode_ruang' => $request->kode_ruang,
            'keterangan' => $request->keterangan

        ]);
        return redirect('/Ruang');
    }

    public function destroy(string $id)
    {
        DB::table('ruangs')->where('id',$id)->delete();

        return redirect('/Ruang');
    }

}
