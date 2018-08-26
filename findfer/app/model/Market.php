<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = ['address_id', 'name', 'description', 'latitude', 'longitude', 'foundation'];
    public $timestamps = false;

    public function address(){
    	return $this->hasOne('model\Address');
    }
    public function stand(){
    	return $this->hasMany('model\Stand');
    }
}
