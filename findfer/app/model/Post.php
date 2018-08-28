<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['url_image','title','content', 'autor'];
	public $timestamps = true;

}
