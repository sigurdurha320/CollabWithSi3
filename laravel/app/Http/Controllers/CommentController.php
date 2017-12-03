<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentController extends Controller
{
    public function store(Article $article)
    {
    	$article->addComment(request('contents'));
    	return redirect('/article/'+$article->id);;
    }
}
