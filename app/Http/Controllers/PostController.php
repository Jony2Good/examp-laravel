<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post', compact('posts'));
    }

    public function show(Post $id)
    {
        $post = Post::where('id', $id->id)->get();

        return view('about', compact('post'));
    }

    public function store()
    {
        request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => ['required', File::types(['png', 'jpg'])],
        ]);

        $data = request()->only(['title', 'content']);

        Post::create($data);
        return redirect()->route('post.index');
    }

    public function edit(Post $id)
    {
        return view('posts.edit', compact('id'));
    }

    public function update(Post $id)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
        ]);

        $id->update($data);
        return redirect()->route('post.show', $id->id);
    }

    public function destroy(Post $id)
    {
       Post::find($id->id)->delete();
       return redirect()->route('post.index');
    }
}
