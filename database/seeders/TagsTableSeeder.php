<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Tag::truncate();     
        DB::statement('SET FOREIGN_KEY_CHECKS=1');  

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 80; $i++) {

            Tag::create([
                'tag_title' => $faker->lastName,
                'url' => $faker->url,                
            ]);
        } 
    }
}
