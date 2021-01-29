<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->truncate();

        $name = Str::random(10);
        DB::table('users')->insert([
            'name'=>Str::title($name).' '.Str::title($name),
            'email' => Str::random(10).'@mail.com',
            'email_verified_at'=>now(),
            'password' => Hash::make('password')
        ]);

    }
}
