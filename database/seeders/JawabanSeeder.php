<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pertanyaan;
use App\Models\Jawaban;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pertanyaans = Pertanyaan::all();

        foreach ($pertanyaans as $pertanyaan) {
            $jawabans = [];

            switch ($pertanyaan->id) {
                case 1:
                    $jawabans = [
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Ya, lebih suka berkumpul bersama teman-teman', 'value' => 'E'],
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Tidak, lebih suka sendiri di rumah', 'value' => 'I'],
                    ];
                    break;
                case 2:
                    $jawabans = [
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Ya, merasa lelah setelah acara sosial', 'value' => 'E'],
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Tidak, merasa energik setelahnya', 'value' => 'I'],
                    ];
                    break;
                case 3:
                    $jawabans = [
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Ya, lebih fokus pada detail', 'value' => 'S'],
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Tidak, lebih suka gambaran besar', 'value' => 'P'],
                    ];
                    break;
                case 4:
                    $jawabans = [
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Ya, lebih sering memikirkan ide-ide besar', 'value' => 'S'],
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Tidak, lebih fokus pada fakta konkret', 'value' => 'P'],
                    ];
                    break;
                case 5:
                    $jawabans = [
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Ya, berdasarkan logika dan fakta', 'value' => 'T'],
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Tidak, berdasarkan perasaan dan intuisi', 'value' => 'F'],
                    ];
                    break;
                case 6:
                    $jawabans = [
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Ya, lebih mengutamakan perasaan orang lain', 'value' => 'T'],
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Tidak, lebih mengutamakan logika', 'value' => 'F'],
                    ];
                    break;
                case 7:
                    $jawabans = [
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Ya, lebih suka merencanakan jauh-jauh hari', 'value' => 'J'],
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Tidak, lebih suka spontan', 'value' => 'P'],
                    ];
                    break;
                case 8:
                    $jawabans = [
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Ya, cenderung fleksibel dengan perubahan', 'value' => 'J'],
                        ['id_pertanyaan' => $pertanyaan->id, 'jawaban' => 'Tidak, lebih suka rutinitas yang stabil', 'value' => 'P'],
                    ];
                    break;

                default:
                    # code...
                    break;
            }

            foreach ($jawabans as $jawaban) {
                Jawaban::create($jawaban);
            }
        }
    }
}
