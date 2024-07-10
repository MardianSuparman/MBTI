<?php

namespace App\Http\Controllers;

use App\Models\JenisKepribadian;
use Illuminate\Http\Request;
use Alert;

class JenisKepribadianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jeniskepribadian = JenisKepribadian::all();
        confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.jeniskepribadian.index', compact('jeniskepribadian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jeniskepribadian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis_kepribadian' => 'required',
            'pengertian' => 'required',
            'kelebihan' => 'required',
            'kekurangan' => 'required',
            'karir' => 'required',
        ]);

        $jeniskepribadian=new JenisKepribadian();
        $jeniskepribadian->jenis_kepribadian=$request->jenis_kepribadian;
        $jeniskepribadian->pengertian=$request->pengertian;
        $jeniskepribadian->kelebihan=$request->kelebihan;
        $jeniskepribadian->kekurangan=$request->kekurangan;
        $jeniskepribadian->karir=$request->karir;
        $jeniskepribadian->save();
        Alert::success('Success', 'Data Berhasil di Tambahkan')->autoClose(2000);
        return redirect()->route('jeniskepribadian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jeniskepribadian $jeniskepribadian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $jeniskepribadian = JenisKepribadian::findOrFail($id);
        return view('admin.jeniskepribadian.edit', compact('jeniskepribadian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jenis_kepribadian' => 'required',
            'pengertian' => 'required',
            'kelebihan' => 'required',
            'kekurangan' => 'required',
            'karir' => 'required',
        ]);

        $jeniskepribadian=JenisKepribadian::findOrFail($id);
        $jeniskepribadian->jenis_kepribadian=$request->jenis_kepribadian;
        $jeniskepribadian->pengertian=$request->pengertian;
        $jeniskepribadian->kelebihan=$request->kelebihan;
        $jeniskepribadian->kekurangan=$request->kekurangan;
        $jeniskepribadian->karir=$request->karir;
        $jeniskepribadian->save();
        Alert::success('Success', 'Data Berhasil di Edit')->autoClose(2000);
        return redirect()->route('jeniskepribadian.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jeniskepribadian=JenisKepribadian::findOrFail($id);
        $jeniskepribadian->delete();
        toast('Data delete Successfully', 'success')->autoClose(1000);
        return redirect()->route('jeniskepribadian.index');
    }
}
