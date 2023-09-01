<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;

class FormController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('form.index', compact('categories', 'tags'));
    }

}
