<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['porter_id','user_id','code', 'value', 'validity'];
    public $timestamps = true;

    public function poster(){
    	return $this->belongsTo('model\Poster');
    }
}
