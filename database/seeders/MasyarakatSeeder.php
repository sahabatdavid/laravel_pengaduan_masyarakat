<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Masyarakat;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Masyarakat::create([
            'nik'       => '123432820',
            'nama'      => 'Masyarkat Pertama',
            'telp'      => '081234567',
            'user_id'   => 1
        ]);
    }
}
