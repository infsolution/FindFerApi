<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    protected $fillable = ['market_id','user_id','name', 'slogan','latitude','longitude'];
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('model\User');
    }
    public function market(){
    	return $this->belongsTo('model\Market');
    }

    public function poster(){
    	return $this->hasMany('model\Poster');
    }
    public function image(){
        return $this->morphMany('model\Image', 'imagenable');
    }
}
