<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
use Faker\Generator as Faker;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        //filtro solo i post pubblicati
        $posts = Post::where('published', 1)->get();
        //ciclo questi post
        foreach($posts as $post)
        {
            //per ogni post vado a generare un numero random di commenti
            for ($i=0; $i < rand(0, 5) ; $i++) { 
                //creo l'istanza del nuovo commento
                $newComment = new Comment();
                $newComment->post_id = $post->id;
                $newComment->name = $faker->name();
                $newComment->date = $faker->date();
                $newComment->content = $faker->text();
                $newComment->save();
            }
        }
    }
}
