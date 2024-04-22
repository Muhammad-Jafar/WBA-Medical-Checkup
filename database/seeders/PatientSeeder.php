<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        $fake->locale('id_ID');

        for($i=1; $i<101; $i++) {
            Patient::create([
                'id' => $i,
                'nik' => '7404' . $fake->numberBetween(100000000000, 999999999999),
                'name' => $fake->name,
                'gender' => $fake->randomElement([1, 2]),
                'born_place' => $fake->city,
                'born_date' => $fake->dateTimeBetween('-50 years', '-20 years')->format('Y-m-d'),
                'address' => $fake->address,
                'occupation' => $fake->jobTitle
            ]);
        }
    }
}
