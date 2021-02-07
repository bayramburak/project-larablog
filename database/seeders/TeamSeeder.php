<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::table('teams')->truncate();


        for ($i = 0; $i < 10; $i++) {

            DB::table('teams')->insert([
                'name' => $faker->name,
                'role' => $faker->jobTitle,
                'email' => $faker->email
            ]);
        }
    }
}
