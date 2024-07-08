<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Alert;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.pertanyaan.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.Pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pertanyaan' => 'required',
            'dimensi' => 'required',
        ]);

        $pertanyaan=new Pertanyaan();
        $pertanyaan->pertanyaan=$request->pertanyaan;
        $pertanyaan->dimensi=$request->dimensi;
        $pertanyaan->save();
        Alert::success('Success', 'Data Berhasil di Tambahkan')->autoClose(2000);
        return redirect()->route('pertanyaan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        return view('admin.pertanyaan.edit', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pertanyaan' => 'required',
            'dimensi' => 'required',
        ]);

        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->dimensi = $request->dimensi;
        $pertanyaan->save();
        Alert::success('Success', 'Data Berhasil di Edit')->autoClose(2000);
        return redirect()->route('pertanyaan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pertanyaan=Pertanyaan::findOrFail($id);
        $pertanyaan->delete();
        toast('Data delete Successfully', 'success')->autoClose(1000);
        return redirect()->route('pertanyaan.index');
    }
}
