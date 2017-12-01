<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'id';
	protected $table = 'comment';
	protected $fillable = ['contents'];
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }
}
