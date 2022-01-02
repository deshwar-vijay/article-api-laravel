<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Article::truncate();     
        DB::statement('SET FOREIGN_KEY_CHECKS=1');  

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 20; $i++) {
           if ($i % 2 == 0) $image_path = "https://via.placeholder.com/150x84.png?text=Visit+WhoIsHosting";
            else $image_path = "https://via.placeholder.com/150x84.png?text=welcome";
            Article::create([
                'title' => $faker->sentence,
                'decription' => $faker->text(200),
                'image_path' => $image_path,
            ]);
        }
    }
}
