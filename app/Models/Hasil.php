<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pengguna;
use App\Models\Jawaban;
use App\Models\JenisKepribadian;

class Hasil extends Model
{
    use HasFactory;

    public function Pengguna(){
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
    public function Jawaban(){
        return $this->belongsTo(Jawaban::class, 'id_jawaban');
    }
    public function JenisKepribadian(){
        return $this->belongsTo(JenisKepribadian::class, 'id_jenis_kepribadian');
    }
}
