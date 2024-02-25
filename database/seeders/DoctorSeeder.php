<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1; $i<6; $i++) {
            Doctor::create([
                'id' => $i,
                'name' => $faker->name,
                'nip' => str_pad($faker->numberBetween(1, 9999999999999999), 16, '0', STR_PAD_LEFT),
                'sip' => str_pad($faker->numberBetween(1, 9999999999999), 12, '0', STR_PAD_LEFT),
            ]);
        }
    }
}
