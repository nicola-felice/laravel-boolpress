<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i < 100; $i++ )
        {
            $post = new Post();
            $post->title = $faker->sentence(7);
            $post->author = $faker->words(2, true);
            $post->content = $faker->paragraphs(5, true);
            $post->save();
        }
    }
}
