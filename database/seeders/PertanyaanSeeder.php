<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pertanyaans = [
            [
                'text' => 'Apakah Anda lebih suka menghabiskan akhir pekan dengan berkumpul bersama teman-teman daripada sendiri di rumah',
                'dimensi' => 'E/I',
            ],
            [
                'text' => 'Apakah Anda merasa lelah setelah berada di acara sosial yang ramai',
                'dimensi' => 'E/I',
            ],
            [
                'text' => 'Apakah Anda lebih suka fokus pada detail dalam tugas yang Anda lakukan',
                'dimensi' => 'S/N',
            ],
            [
                'text' => 'Apakah Anda lebih sering memikirkan ide-ide besar daripada fakta-fakta konkret',
                'dimensi' => 'S/N',
            ],
            [
                'text' => 'Apakah Anda cenderung mengambil keputusan berdasarkan logika dan fakta',
                'dimensi' => 'T/F',
            ],
            [
                'text' => 'Apakah Anda lebih mengutamakan perasaan orang lain saat membuat keputusan',
                'dimensi' => 'T/F',
            ],
            [
                'text' => 'Apakah Anda lebih suka merencanakan aktivitas jauh-jauh hari',
                'dimensi' => 'J/P',
            ],
            [
                'text' => 'Apakah Anda cenderung lebih fleksibel dan menerima perubahan mendadak',
                'dimensi' => 'J/P',
            ],
        ];

        DB::table('pertanyaans')->insert($pertanyaans);
    }
}
