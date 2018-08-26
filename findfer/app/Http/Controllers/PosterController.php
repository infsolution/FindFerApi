<?php

namespace findfer\Http\Controllers;

use Illuminate\Http\Request;
use findfer\model\Poster;
use findfer\model\Image;
class PosterController extends Controller
{
    public function index(){
    	$pts = [];
    	$posters = Poster::all();
    	foreach ($posters as $poster) {
    		$pts[] =  ['poster'=>$poster, 'images'=>[$poster->image()->get()]];
    	}
    	return $pts;
    	//return Image::all();
    }

    public function create(Request $request){
    	$poster = Poster::create($request->all());
    	if($poster){
    		foreach ($request->get('images') as $image) {
    			$poster->image()->create(['url_image'=>$image]);
    		}
    		return response('Poster criado com sucesso',201);
    	}
    	return response('Fail',501);
    }
}
