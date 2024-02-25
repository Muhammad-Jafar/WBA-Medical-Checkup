<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        Doctor::create([
            'id' => Str::uuid(),
            'name' => $faker->name,
            'nip' => str_pad($faker->numberBetween(1, 999999), 13, '0', STR_PAD_LEFT),
            'sip' => str_pad($faker->numberBetween(1, 999999), 10, '0', STR_PAD_LEFT),
        ]);
    }
}
