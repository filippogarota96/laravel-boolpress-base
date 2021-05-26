<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;
class TagsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creo l'array con i seeds
        $tags = [
            'html',
            'css',
            'js',
            'php',
            'vuejs',
            'laravel',
            'sass'
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag, '-');
            $newTag->save();
        }
    }
}
