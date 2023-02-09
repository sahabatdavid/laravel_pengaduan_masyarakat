<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            'nama'      => 'Petugas Pertama',
            'telp'      => '081234567',
            'level'     => 'admin',
            'user_id'   => 2
        ]);
    }
}
