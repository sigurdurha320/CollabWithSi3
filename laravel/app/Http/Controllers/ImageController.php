<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ImageController extends Controller
{
    public function fetch(Article $article)
    {
    	return '<img src="data:image/jpeg;base64,'.base64_encode( $article->img ).'"/>'.$article.'pie';
    }
}
