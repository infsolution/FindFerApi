<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name','fone', 'email','message'];
	public $timestamps = true;
}
