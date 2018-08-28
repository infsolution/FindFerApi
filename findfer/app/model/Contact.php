<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['type','value'];
	public $timestamps = true;
}
