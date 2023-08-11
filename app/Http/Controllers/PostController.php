<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            dump($post->content);

        }

        $p = Post::where('image', 'like', '%0%')->get();
        dump($p);

    }

    /**
     * @throws \Exception
     */
    public function create()
    {
        $b = mt_rand(1, 200);
        $arr = [
            'title' => fake()->name(),
            'content' => fake()->text(),
            'image' => "image-{$b}.png",
            'likes' => $b,
            'is_published' => 1,
        ];

        Post::create($arr);


    }

    public function update()
    {
        $post = Post::find(6);

        $post->update([
            'title' => 'Lev Tolstoj',
            'content' => 'War and peace',
        ]);

        echo $post->content;
    }

    public function delete($id)
    {
        $post = Post::find(2);
        if(isset($post)) {
            $post->delete();
        } else {
            echo "Post already deleted";
        }
    }

    public function restore($id)
    {
       Post::withTrashed()->find($id)->restore();

    }

    public function firstOrCreate()
    {
        $b = "image-" . mt_rand(1, 200) . ".png";
        $c = mt_rand(1, 200);

        $arr = [
            'title' => fake()->name(),
            'content' => fake()->text(),
            'image' => $b,
            'likes' => $c,
            'is_published' => 1,
        ];

       $post = Post::updateOrCreate([ 'image' => $b ], $arr);
       dump($post->id);
    }

}
