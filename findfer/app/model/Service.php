<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title','description', 'value'];
	public $timestamps = true;
}
