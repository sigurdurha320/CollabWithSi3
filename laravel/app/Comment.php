<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'id';
	protected $table = 'comment';
	protected $fillable = ['contents','users_id','article_id'];
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }

    public function user()
    {
    	return $this->belongsto(User::class);
    }
}
