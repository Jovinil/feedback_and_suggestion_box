<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'first_name' => $faker->firstName,
            'middle_name' => $faker->lastName,
            'last_name' => $faker->lastName,
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'first_name' => $faker->firstName,
            'middle_name' => $faker->lastName,
            'last_name' => $faker->lastName,
            'username' => 'user',
            'password' => Hash::make('password'),
            'role' => 0,
        ]);
    }
}
