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
//        echo Article::whereDate('created_at', '2023-08-14')->get();

//        $articles = Article::where('id', 3)->select('title')->get();
//        $articles = Article::where('published', false)->get();

//       $d =  $articles->filter(function($value) {
//            return $value->price >= 9;
//        });
//        echo $d;
//
//        echo '<br>';
//        echo '------';
//        echo "<br>";
//
//
//        $c =  Article::where('published', false)->get();
//        $cd = $c->reject(function($value) {
//            return $value->price <= 8;
//        });
//
//        echo $cd;
//        $d = $articles->map(function ($value) {
//            return [
//                'article_id' => $value->id,
//                'article_title' => $value->title
//            ];
//
//        });
////       $d = $articles->only(["title"]);
//        $a = $d->prepend(0, -1)->values()->except(0);
//        print_r($a);
//
//        $articles = Article::pluck('title');
//        echo $articles;
        $articles = Article::where('id', 3)->get();
        $d = $articles->put('title', 'New world of Fantazy');
        print_r($d);



    }
}
