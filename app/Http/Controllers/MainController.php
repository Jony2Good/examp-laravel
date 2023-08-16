<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $posts = $this->getData();
        return view('posts.main');
    }

}
