<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jawaban;

class Pertanyaan extends Model
{
    use HasFactory;

    public function Jawaban(){
        return $this->hashMany(Jawaban::class, 'id_pertanyaan', 'id');
    }

}
