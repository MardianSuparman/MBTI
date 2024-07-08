<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Testimoni;

class Pengguna extends Model
{
    use HasFactory;

    public function Testimoni(){
        return $this->hashMany(Testimoni::class, 'id_pengguna');
    }

}
