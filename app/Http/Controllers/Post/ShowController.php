<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $id)
    {
        $post = Post::where('id', $id->id)->get();
        
        return view('about', compact('post'));
    }

}
