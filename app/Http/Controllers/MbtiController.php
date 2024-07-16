<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasil;
use App\Models\Pertanyaan;

class MbtiController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertanyaans = Pertanyaan::with('jawabans')->get();
        return view('pengisian', compact('pertanyaans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input
        $validated = $request->validate([
            'jawabans' => 'required|array',
            'jawabans.*' => 'required|string|in:E,I,S,N,T,F,J,P',
        ]);

        // Menghitung hasil MBTI
        $counts = [
            'E' => 0, 'I' => 0,
            'S' => 0, 'N' => 0,
            'T' => 0, 'F' => 0,
            'J' => 0, 'P' => 0,
        ];

        foreach ($request->input('jawabans') as $jawaban) {
            $counts[$jawaban]++;
        }

        $result = '';
        $result .= $counts['E'] >= $counts['I'] ? 'E' : 'I';
        $result .= $counts['S'] >= $counts['N'] ? 'S' : 'N';
        $result .= $counts['T'] >= $counts['F'] ? 'T' : 'F';
        $result .= $counts['J'] >= $counts['P'] ? 'J' : 'P';

        // cari MBTI type berdasarkan hasil
        $mbtiResult= Hasil::where('type', $result)->first();

        // Menyimpan hasil test
        $hasil = new Hasil();
        $hasil->name = Auth::user()->name;
        $hasil->email = Auth::user()->email;
        $hasil->hasil = $result;
        $hasil->save();

        // redirect ke halaman hasil
        return redirect()->route('mbti.hasil', $mbtiResult->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hasil = Hasil::findOrFail($id);

        // Deskripsi berdasarkan hasil mbti
        $pengertian = JenisKepribadian::all()->keyBy('jenis_kepribadian');

        // Dapatkan deskripsi berdasarkan hasil MBTI
        $deskripsi = $pengertian->has($hasil->hasil) ? $pengertian[$hasil->hasil]->pengertian : 'Deskripsi tidak tersedia untuk tipe kepribadian ini.';

        return view('mbti.hasil', compact('hasil', 'deskripsi'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
