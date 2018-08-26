<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['title','value'];
	public $timestamps = true;
}
