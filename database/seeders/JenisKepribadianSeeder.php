<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class JenisKepribadianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jeniskepribadians = [
            [
                'jenis_kepribadian' => 'ISTJ',
                'pengertian' => 'Praktis, bertanggung jawab, dan sangat terorganisir.',
                'kelebihan' => 'Teliti, loyal, dan dapat diandalkan.',
                'kekurangan' => 'Terkadang kaku dan kurang fleksibel.',
                'karir' => 'Akuntan, administrator, manajer proyek.',

            ],
            [
                'jenis_kepribadian' => 'ISFJ',
                'pengertian' => 'Peduli, setia, dan memperhatikan detail.',
                'kelebihan' => 'Empatik, bertanggung jawab, dan suka membantu.',
                'kekurangan' => 'Sulit menolak permintaan dan terlalu memikirkan orang lain.',
                'karir' => 'Perawat, guru, pekerja sosial.',

            ],
            [
                'jenis_kepribadian' => 'INFJ',
                'pengertian' => 'Visioner, intuitif, dan sangat mendalam.',
                'kelebihan' => 'Kreatif, memiliki integritas tinggi, dan berorientasi pada nilai.',
                'kekurangan' => 'Terlalu idealis dan bisa merasa terasing.',
                'karir' => 'Psikolog, penulis, konselor.',

            ],
            [
                'jenis_kepribadian' => 'INTJ',
                'pengertian' => 'Strategis, analitis, dan berpikiran jauh.',
                'kelebihan' => 'Visioner, mandiri, dan sangat fokus.',
                'kekurangan' => 'Terlalu kritis dan sulit berkomunikasi.',
                'karir' => 'Ilmuwan, arsitek, analis data.',

            ],
            [
                'jenis_kepribadian' => 'ISTP',
                'pengertian' => 'Praktis, suka petualangan, dan fleksibel.',
                'kelebihan' => 'Tangan terampil, cepat beradaptasi.',
                'kekurangan' => 'Terkadang impulsif dan kurang perhatian pada emosi.',
                'karir' => 'Teknik, mekanik, pilot.',

            ],
            [
                'jenis_kepribadian' => 'ISFP',
                'pengertian' => 'Kreatif, penuh perasaan, dan menghargai keindahan.',
                'kelebihan' => 'Sensitif, artistik, dan suka kebebasan.',
                'kekurangan' => 'Tidak suka konflik dan bisa terlalu santai.',
                'karir' => 'Seniman, desainer, musisi.',

            ],
            [
                'jenis_kepribadian' => 'INFP',
                'pengertian' => 'Idealistis, empatik, dan peka.',
                'kelebihan' => 'Kreatif, penuh empati, dan berkomitmen pada nilai.',
                'kekurangan' => 'Sulit mengambil keputusan.',
                'karir' => 'Penulis, konselor, aktivis.',

            ],
            [
                'jenis_kepribadian' => 'INTP',
                'pengertian' => 'Analitis, logis, dan suka merenung.',
                'kelebihan' => 'Kreatif dalam memecahkan masalah.',
                'kekurangan' => 'Sulit berinteraksi sosial.',
                'karir' => 'Ilmuwan, programmer, filosofi.',

            ],
            [
                'jenis_kepribadian' => 'ESTP',
                'pengertian' => 'Energik, suka tantangan, dan praktis.',
                'kelebihan' => 'Berani, cepat tanggap.',
                'kekurangan' => 'Impetusif dan kadang mengabaikan rencana.',
                'karir' => 'Pengusaha, pemimpin, sales.',

            ],
            [
                'jenis_kepribadian' => 'ESFP',
                'pengertian' => 'Ceria, ekstrovert, dan suka bersenang-senang.',
                'kelebihan' => 'Ramah, energik, dan mudah bergaul.',
                'kekurangan' => 'Terkadang kurang fokus.',
                'karir' => 'Aktor, penyanyi, pekerja event.',

            ],
            [
                'jenis_kepribadian' => 'ENFP',
                'pengertian' => 'Antusias, kreatif, dan bersemangat.',
                'kelebihan' => 'Inspiratif, adaptif.',
                'kekurangan' => 'Sulit fokus.',
                'karir' => 'Pemasar, motivator, penulis kreatif.',

            ],
            [
                'jenis_kepribadian' => 'ENTP',
                'pengertian' => 'Inovatif, berdebat, dan suka tantangan.',
                'kelebihan' => 'Cerdas, kreatif, dan komunikatif.',
                'kekurangan' => 'Bisa terlalu provokatif.',
                'karir' => 'Pengacara, entrepreneur.',

            ],
            [
                'jenis_kepribadian' => 'ESTJ',
                'pengertian' => 'Tegas, terorganisir, dan realistis.',
                'kelebihan' => 'Memimpin dengan baik, efisien.',
                'kekurangan' => 'Kaku dan bisa terlalu dominan.',
                'karir' => 'Manajer, eksekutif.',

            ],
            [
                'jenis_kepribadian' => 'ESFJ',
                'pengertian' => 'Peduli, sosial, dan kooperatif.',
                'kelebihan' => 'Ramah, perhatian.',
                'kekurangan' => 'Terlalu mengandalkan orang lain.',
                'karir' => 'Guru, perawat.',

            ],
            [
                'jenis_kepribadian' => 'ENFJ',
                'pengertian' => 'Pemimpin, empatik, dan inspiratif.',
                'kelebihan' => 'Memotivasi orang lain.',
                'kekurangan' => 'Terkadang mengabaikan kebutuhan sendiri.',
                'karir' => 'Pendidik, pemimpin organisasi.',

            ],
            [
                'jenis_kepribadian' => 'ENTJ',
                'pengertian' => 'Tegas, ambisius, dan visioner.',
                'kelebihan' => 'Memimpin dengan baik.',
                'kekurangan' => 'Terkadang terlalu dominan.',
                'karir' => 'CEO, manajer.',

            ],
        ];

        DB::table('jenis_kepribadians')->insert($jeniskepribadians);
    }
}
