<?php

namespace findfer\model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['url_image', 'imagenable_id', 'imagenable_type'];
    public $timestamps = true;

    public function imagenable(){
    	return $this->morphTo();
    }
}
