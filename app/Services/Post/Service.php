<?php

use App\Models\Post;

class Service
{
    public function store($d)
    {
        $tags = $d['tags'];

        unset($d['tags'], $d['image']);

        $post = Post::create($d);
        $post->tags()->attach($tags);
    }

    public function update(Post $id, $data)
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $id->update($data);
        $id->tags()->sync($tags);
    }

}
