<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CheckupType;

class CheckupTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CheckupType::create([
            'name' => 'SKBS Biasa',
            'abbreviated_word' => 'Regular',
            'description' => 'Pembuatan SKBS untuk jenis umum'
        ]);
    }
}