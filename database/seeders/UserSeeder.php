<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 3; $i++){
            $user = User::create([
                "name"=> $faker->word,
                "email"=> $faker->email,
                "password"=> bcrypt("bach2612")
            ]);
        }
    }
}
