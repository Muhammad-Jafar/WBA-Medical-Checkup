<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Preference;

class PreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preference::create([
            'id_preferences' => 1,
            'name' => 'Limit Permintaan harian',
            'desc' => 'Sesuaikan jumlah permintaan SKBS per harinya',
            'status' => 0,
            'input' => '50',  
        ]);
    }
}
