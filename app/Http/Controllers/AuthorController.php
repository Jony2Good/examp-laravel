<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show()
    {

        $arr = [
            'firstname' => fake()->name(),
            'lastname' => fake()->name(),
            'email' => fake()->email(),
        ];

        Author::create($arr);


    }
}
