<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrator
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('sandi'), // password
            'remember_token' => Str::random(10),
        ])->assignRole('admin')->givePermissionTo(['create', 'read', 'update', 'delete']);

        // Member
        User::create([
            'name' => 'Member',
            'email' => 'member@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('sandi'),
            'remember_token' => Str::random(5),
        ])->assignRole('member')->givePermissionTo(['create', 'read']);
    }
}
