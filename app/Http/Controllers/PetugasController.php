<?php

namespace App\Http\Controllers;

use App\Models\Petugas;

use Illuminate\Http\Request;

use Illuminate\Support\facades\db;

class PetugasController extends Controller
{
    public function index()
    {
        $judul ="Petugas";
        $data = Petugas::all();
        return view("Petugas.tampil",compact('data','judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judul = "Petugas";
        return view('Petugas.input', compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('Petugas')->insert([
            'nama_petugas' => $request ->nama_petugas,
            'username' => $request->username,
            'password' => $request->password,
            'level' => $request->level

        ]);
        return redirect('/Petugas');
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
        $judul ="Petugas";
        $data = DB::table('petugas')->where('id_petugas',$id)->get();
        return view('Petugas.edit',['petugas' => $data], compact('judul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB ::table('Petugas')->where('id_petugas',$request->id)->update ([
            'nama_petugas' => $request ->nama_petugas,
            'username' => $request->username,
            'password' => $request->password,
            'level' => $request->level
        ]);
        return redirect('/Petugas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('Petugas')->where('id_petugas',$id)->delete();

        return redirect('/Petugas');
    }
}
