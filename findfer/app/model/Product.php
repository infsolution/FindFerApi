<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = ['name'];
   public $timestamps = false;

   public function poster(){
   	return $this->hasMany('model\Poster');
   }
}
