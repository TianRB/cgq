<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'video', 'content', 'page_title', 'meta_descr', 'category'];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
	public function scopeTitle($query, $title)
	{
			return $query->where("title","like","%$title%");
	}

}
