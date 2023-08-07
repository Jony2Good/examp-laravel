<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "<h2>Next controller</h2> <p>Now you are reade to something difficult</p>";
    }
}
