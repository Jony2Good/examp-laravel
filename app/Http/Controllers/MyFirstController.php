<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(): string
    {
        return "<h1>This is my page</h1>";
    }
}
