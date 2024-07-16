<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pertanyaan;


class jawaban extends Model
{
    use HasFactory;

    public function Pertanyaan(){
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }

}
