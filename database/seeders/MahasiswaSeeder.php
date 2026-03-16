<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('mahasiswas')->insert([
            [
                'nim' => '221001',
                'nama' => 'Andi Saputra',
                'jurusan' => 'Informatika',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '221002',
                'nama' => 'Budi Santoso',
                'jurusan' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}