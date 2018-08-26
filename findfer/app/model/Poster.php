<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;
use findfer\model\Image;
class Poster extends Model
{
    protected $fillable = ['stand_id', 'product_id','title', 'description', 'value', 'promotion'];
    public $timestamps = true;



    public function product(){
    	return $this->belongsTo('Product');
    }

    public function stand(){
    	return $this->belongsTo('Stand');
    }

    public function image(){
    	return $this->morphMany('findfer\model\Image', 'imagenable');
    }
    public function sale(){
        return $this->belongsToMany('Sale');
    }
    public function coupon(){
        return $this->hasOne('Coupon');
    }
}
