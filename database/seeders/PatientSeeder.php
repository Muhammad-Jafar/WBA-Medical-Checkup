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

        for($i=1; $i<21; $i++) {
            Patient::create([
                'id' => Str::uuid(),
                'name' => $fake->name,
                'gender' => $fake->randomElement([1, 2]),
                'born_place' => $fake->city,
                'born_date' => $fake->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d'),
                'address' => $fake->address,
                'occupation' => $fake->jobTitle
            ]);
        }
    }
}
