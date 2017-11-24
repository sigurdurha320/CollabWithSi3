<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller
use App\Article;


class ArticleController extends Controller
{
    public function index()
    {
    	return view('home');
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

    public function show($id)
    {
    	$article = Article::find($id);
        return $article;
    }
}
