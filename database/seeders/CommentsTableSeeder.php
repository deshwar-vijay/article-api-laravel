<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Comment::truncate();     
        DB::statement('SET FOREIGN_KEY_CHECKS=1');  

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 30; $i++) {

            Comment::create([
                'subject' => $faker->sentence,
                'body' => $faker->text(500), 
                'article_id' => rand(1,20),               
            ]);
        }
    }
}
