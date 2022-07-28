<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => fake()->title(),
            'description' => fake()->paragraph(2, true),
            'category' => fake()->sentence(),
            'author' => fake()->name(),
        ]);

        // $faker = Faker::create();

        for ($i = 1; $i < 20; $i++) {

            $news = new News;

            $news->title = fake()->title();
            $news->description = fake()->paragraph(2, true);
            $news->category = fake()->sentence();
            $news->author = fake()->name();

            $news->save();
        }
    }
}
