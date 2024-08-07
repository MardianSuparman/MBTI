<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use App\Models\Jawaban;
use App\Models\JenisKepribadian;
// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PertanyaanSeeder::class,
            JawabanSeeder::class,
            JenisKepribadianSeeder::class,
        ]);

    }
}
