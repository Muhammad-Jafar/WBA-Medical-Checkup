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

        $data = [
            0 => [
                'name' => 'SKBS Umum',
                'abbreviated_word' => 'Regular',
                'description' => 'Pembuatan SKBS biasa oleh dan/atau untuk pasien'
            ],
            1 => [
                'name' => 'SKBS Internal',
                'abbreviated_word' => 'Internal',
                'description' => 'Pembuatan SKBS umum oleh dan/atau untuk orang dalam'
            ],
        ];

        foreach ($data as $write) {
            CheckupType::create([
                'name' => $write['name'],
                'abbreviated_word' => $write['abbreviated_word'],
                'description' => $write['description']
            ]);
        }
    }
}