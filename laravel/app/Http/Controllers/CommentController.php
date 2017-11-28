<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Article;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
    	$article->comment()->create($request->contents;);
    	return back();
    }
}
