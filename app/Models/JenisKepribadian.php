<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hasil;


class JenisKepribadian extends Model
{
    use HasFactory;

    public function Hasil(){
        return $this->hashMany(Hasil::class, 'id_jenis_kepribadian');
    }

}
