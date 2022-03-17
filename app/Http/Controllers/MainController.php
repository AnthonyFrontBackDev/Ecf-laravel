<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }

    public function articles()
    {
        $articles = Article::all();

        return view('accueil',[
             'articles' => $articles
        ]);
    }
}