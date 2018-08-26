<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['district','city','state', 'country'];
    public $timestamps = false;

    public function Market()
     {
     	return $this->belongsTo('model\Market');
     } 
}
