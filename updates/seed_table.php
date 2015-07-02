<?php

namespace Cybeard\Testplugin\Updates;


use Cybeard\Testplugin\Models\Post;
use Cybeard\Testplugin\Models\Comment;
use October\Rain\Database\Updates\Seeder;

class SeedTable extends Seeder
{
    public function run()
    {
        $post = Post::create([
            'title' => 'this post contain bad comments',
            'content' => 'hello this is example post'
        ]);

        $badComment1 = Comment::create([
            'comment' => 'this is bad comment',
            'post_id' => 1,
            'bad_comment' => 1
        ]);

        $badComment2 = Comment::create([
            'comment' => 'this is also bad comment',
            'post_id' => 1,
            'bad_comment' => 1
        ]);

        $goodComment = Comment::create([
            'comment' => 'finally good comment',
            'post_id' => 1,
            'bad_comment' => 0
        ]);
    }
}