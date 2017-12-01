<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
    	$article->comments()->create($request->all());	
    	return back();
    }
}
