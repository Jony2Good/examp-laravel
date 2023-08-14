<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
//        echo '<br>';
//        echo Article::where('published', true)->count();
//        echo '<br>';
//        echo Article::where('price', '5')->count();
//        echo '<br>';
//        var_dump(Article::pluck('author_id')->countBy());
//        echo '<br>';
//        var_dump(Article::max('description'));
//        echo '<br>';
//       echo Article::whereBetween('author_id', [20, 30])->max('price');
//        echo Article::pluck('price')->median();
//        echo Article::inRandomOrder()->first();
//        echo '<br>';
//        echo Article::where('title', 'Et.')->first()->value('description');
//        echo '<br>';
//        echo '<br>';
//
//        echo Article::where('published', false)->where('price', 6)->get();
//
//        echo '<br>';

//       echo Article::where(function($query){
//           $query->where('id', 2);
//       })->get();
//        echo Article::where('price', 7)->update(
//           [  'price' => null ]
//        );


    }
}
