<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Aboult extends Model
{
    protected $fillable = ['title','description', 'founder','date_founder','url_image_startup','url_image_founder'];
	public $timestamps = true;
}
