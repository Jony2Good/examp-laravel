<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object)[
            'id' => fake()->randomNumber(),
            'author' => fake()->unique()->name(),
            'content' => fake()->text(),
        ];

        $posts = array_fill(0,10, $post);

        return view('blog.index', compact('posts'));
    }

    public function show(string $id)
    {
        return view('blog.show', ['id' => $id]);
    }
}
