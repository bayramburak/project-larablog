<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::table('posts')->truncate();


        for ($i = 0; $i < 50; $i++) {

            $title = $faker->sentence(5);

            DB::table("posts")->insert([
                'post_title' => Str::title($title),
                'slug' => Str::slug($title),
                'content' => $faker->sentence(50)

            ]);
        }

    }
}
