<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\File;

class PostController extends Controller
{

    public function home()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('home.index', compact('categories', 'tags'));
    }
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
        $d = request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => '',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $d['tags'];

        unset($d['tags'], $d['image']);

        $post = Post::create($d);
        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }

    public function edit(Post $id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.edit', compact('id', 'categories', 'tags'));
    }

    public function update(Post $id)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $id->update($data);
        $id->tags()->sync($tags);
        return redirect()->route('post.show', $id->id);
    }

    public function destroy(Post $id)
    {
        Post::find($id->id)->delete();
        return redirect()->route('post.index');
    }
}
