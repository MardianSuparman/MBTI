<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Alert;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jawaban = Jawaban::all();
        confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.jawaban.index', compact('jawaban'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pertanyaan=Pertanyaan::all();
        return view('admin.jawaban.create', compact('pertanyaan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        $jawaban=new jawaban();
        $jawaban->jawaban=$request->jawaban;
        $jawaban->id_pertanyaan=$request->id_pertanyaan;
        $jawaban->save();
        Alert::success('Success', 'Data Berhasil di Tambahkan')->autoClose(2000);
        return redirect()->route('jawaban.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jawaban $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $jawaban = jawaban::findOrFail($id);
        return view('admin.jawaban.edit', compact('jawaban'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        $jawaban=Jawaban::findOrFail($id);
        $jawaban->jawaban=$request->jawaban;
        $jawaban->id_pertanyaan=$request->id_pertanyaan;
        $jawaban->save();
        Alert::success('Success', 'Data Berhasil di Edit')->autoClose(2000);
        return redirect()->route('jawaban.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jawaban=jawaban::findOrFail($id);
        $jawaban->delete();
        toast('Data delete Successfully', 'success')->autoClose(1000);
        return redirect()->route('jawaban.index');
    }
}
