<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['name', 'description', 'icon'];
    public $timestamps = false;

	public function posts()
	{
		return $this->hasMany('App\Post');
	}
}
