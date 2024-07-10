<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hasil;
use App\Models\Pertanyaan;


class jawaban extends Model
{
    use HasFactory;

    public function Hasil(){
        return $this->hashMany(Hasil::class, 'id_jawaban');
    }
    public function Pertanyaan(){
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }

}
