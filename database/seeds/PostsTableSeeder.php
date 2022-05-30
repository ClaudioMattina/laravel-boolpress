<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker  $faker )
    {
        
        for ($i=0; $i < 100 ; $i++) { 
            $newPost = new Post;
            $newPost->title = $faker -> word(3, true);
            $newPost->author = $faker -> name();
            $newPost -> content =$faker -> paragraph(5, true);
            $newPost-> img_url =$faker ->imageUrl(300,300,true);
            $newPost->save();
        }
    }
}
