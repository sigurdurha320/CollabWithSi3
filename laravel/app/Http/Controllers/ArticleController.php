<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Article;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('home', compact(['articles']));
    }

    public function postform()
    {
        if (Auth::guest()){
         return redirect('/login');
        }
        else{
         return view('article/postform');
        }

    }

    public function store()    
    {
        if (!Auth::guest()) {
            Article::create([
            'title' => request('article_title'),
            'textContent' => request('article_textContent'),
            'privacy' => 0,
            'users_id' => Auth::id(),
            'img' => request('article_image')
            ]);
        }
        return redirect('/home');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function show(Article $article)
    {
        //return $article;
        return view('article/view', compact('article'));
    }
}
