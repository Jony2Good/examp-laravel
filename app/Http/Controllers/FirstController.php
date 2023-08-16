<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        $posts = $this->getData();
        return view('layouts.main');
    }

}
