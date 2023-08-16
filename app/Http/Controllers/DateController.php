<?php

namespace App\Http\Controllers;

class DateController extends Controller
{
    public function index()
    {
        $posts = $this->getData();
        return view('posts.date');
    }

}
