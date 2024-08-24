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
                'name' => 'SKBS Paket 1',
                'abbreviated_word' => 'Paket 1',
                'description' => 'SKBS tanpa TB + BB'
            ],
            1 => [
                'name' => 'SKBS Paket 2',
                'abbreviated_word' => 'Paket 2',
                'description' => 'SKBS dengan TB + BB'
            ],
            2 => [
                'name' => 'SKBS Paket 3',
                'abbreviated_word' => 'Paket 3',
                'description' => 'SKBS dengan Paket 2 + tekanan darah + kolesterol + gula darah'
            ],
            3 => [
                'name' => 'SKBS Paket 4',
                'abbreviated_word' => 'Paket 4',
                'description' => 'SKBS dengan napza'
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
