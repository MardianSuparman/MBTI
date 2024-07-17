<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jawabans')->insert([
            [
                'id_pertanyaan' => 1,
                'text' => 'Ya, lebih suka berkumpul bersama teman-teman',
                'value' => 'E'
            ],
            [
                'id_pertanyaan' => 1,
                'text' => 'Tidak, lebih suka sendiri di rumah',
                'value' => 'I'
            ],
            [
                'id_pertanyaan' => 2,
                'text' => 'Ya, merasa lelah setelah acara sosial',
                'value' => 'E'
            ],
            [
                'id_pertanyaan' => 2,
                'text' => 'Tidak, merasa energik setelahnya',
                'value' => 'I'
            ],
            [
                'id_pertanyaan' => 3,
                'text' => 'Ya, lebih fokus pada detail',
                'value' => 'S'
            ],
            [
                'id_pertanyaan' => 3,
                'text' => 'Tidak, lebih suka gambaran besar',
                'value' => 'P'
            ],
            [
                'id_pertanyaan' => 4,
                'text' => 'Ya, lebih sering memikirkan ide-ide besar',
                'value' => 'S'
            ],
            [
                'id_pertanyaan' => 4,
                'text' => 'Tidak, lebih fokus pada fakta konkret',
                'value' => 'P'
            ],
            [
                'id_pertanyaan' => 5,
                'text' => 'Ya, berdasarkan logika dan fakta',
                'value' => 'T'
            ],
            [
                'id_pertanyaan' => 5,
                'text' => 'Tidak, berdasarkan perasaan dan intuisi',
                'value' => 'F'
            ],
            [
                'id_pertanyaan' => 6,
                'text' => 'Ya, lebih mengutamakan perasaan orang lain',
                'value' => 'T'
            ],
            [
                'id_pertanyaan' => 6,
                'text' => 'Tidak, lebih mengutamakan logika',
                'value' => 'F'
            ],
            [
                'id_pertanyaan' => 7,
                'text' => 'Ya, lebih suka merencanakan jauh-jauh hari',
                'value' => 'J'
            ],
            [
                'id_pertanyaan' => 7,
                'text' => 'Tidak, lebih suka spontan',
                'value' => 'P'
            ],
            [
                'id_pertanyaan' => 8,
                'text' => 'Ya, cenderung fleksibel dengan perubahan',
                'value' => 'J'
            ],
            [
                'id_pertanyaan' => 8,
                'text' => 'Tidak, lebih suka rutinitas yang stabil',
                'value' => 'P'
            ],

        ]);
    }
}
