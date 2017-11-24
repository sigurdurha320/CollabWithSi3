<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = 'article';
	protected $fillable = ['title','privacy','image'];
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
    public function path()
    {
    	return '/article/'. $this->id;
    }
}
