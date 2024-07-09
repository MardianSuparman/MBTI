<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hasil = Hasil::all();
        confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.hasil.index', compact('hasil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengguna=Pengguna::all();
        $pertanyaan=Pertanyaan::all();
        $jawaban=Jawaban::all();
        $jeniskepribadian=JenisKepribadian::all();
        return view('admin.hasil.create', compact('pengguna', 'pertanyaan', 'hasil', 'jeniskepribadian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pengguna'=>'required',
            'id_pertanyaan'=>'required',
            'id_hasil'=>'required',
            'id_tipe_kepribadian'=>'required',
        ]);

        $hasil=new hasil();
        $hasil->id_pengguna=$request->id_pengguna;
        $hasil->id_pertanyaan=$request->id_pertanyaan;
        $hasil->id_jawaban=$request->id_jawaban;
        $hasil->id_tipe_kepribadian=$request->id_tip_kepribadiane;
        $hasil->save();
        Alert::success('Success', 'Data Berhasil di Tambahkan')->autoClose(2000);
        return redirect()->route('hasil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(hasil $hasil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $hasil = Hasil::findOrFail($id);
        return view('admin.hasil.edit', compact('hasil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_pengguna'=>'required',
            'id_pertanyaan'=>'required',
            'id_hasil'=>'required',
            'id_tipe_kepribadian'=>'required',
        ]);

        $hasil=Hasil::findOrFail($id);
        $hasil->id_pengguna=$request->id_pengguna;
        $hasil->id_pertanyaan=$request->id_pertanyaan;
        $hasil->id_hasil=$request->id_hasil;
        $hasil->id_tipe_kepribadian=$request->id_tip_kepribadiane;
        $hasil->save();
        Alert::success('Success', 'Data Berhasil di Tambahkan')->autoClose(2000);
        return redirect()->route('hasil.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hasil=Hasil::findOrFail($id);
        $hasil->delete();
        toast('Data delete Successfully', 'success')->autoClose(1000);
        return redirect()->route('hasil.index');
    }
}
