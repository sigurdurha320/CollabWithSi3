<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    protected $primaryKey = 'id';
	protected $table = 'article';
	protected $fillable = ['title','privacy','img','textContent','users_id'];


    public function comments()
    {
    	return $this->hasMany(Comment::class);
        //return Comment::class->select('contents','users_id')->where('aritcle_id',$this->id);
    }
    public function addComment($contents)
    {
    	Comment::create([

    			'article_id' => $this->id,
    			'contents' =>	(string)request('contents'),
    			'users_id' => Auth::id()
    		]);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
