<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['stand_id', 'user_id','value', 'discount'];
    public $timestamps = true;

    public function stand(){
    	return $this->belongsTo('model\Stand');
    }

    public function user(){
    	return $this->belongsTo('User');
    }
    public function poster(){
    	return $this->belongsToMany('model\Poster');
    }
}
