<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id';
	protected $table = 'article';
	protected $fillable = ['title','privacy','image','textContent'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
        //return Comment::class->select('contents','users_id')->where('aritcle_id',$this->id);
    }
}
