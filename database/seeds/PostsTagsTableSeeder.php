<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Post;
use App\Tag;

class PostsTagsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('posts_tags')->delete();
        $post = new Post;
        $tag = new Tag;
        $posts = $post->lists('id');
        $tags = $tag->lists('id');
        $postsCount = count($posts) - 1;
        $tagsCount = count($tags) - 1;
        if ($postsCount > 0 && $tagsCount > 0) {
            for ($i = 0; $i < $postsCount * 5; $i++) {
                $postProcess = $post->find($posts[mt_rand(0, $postsCount)]);
                $tagProcess = $tag->find($tags[mt_rand(0, $tagsCount)]);
                $postProcess->tags()->attach($tagProcess);
            }
        }
    }

}
