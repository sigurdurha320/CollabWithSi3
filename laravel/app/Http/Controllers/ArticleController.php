<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Article;


class ArticleController extends Controller
{
    public function index()
    {
    	$articles = Article::all();

    	return view('home', compact('articles'));
    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function show(Article $article)
    {
        return "kek";
        //return view('article/view', compact('article'));
    }
}
