<?php

namespace findfer\Http\Controllers\Api;

use Validator;
use findfer\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use findfer\Http\Controllers\Controller;

class UserController extends Controller
{
    public $successStaus = 200;

    public function login(){
    	if(Auth::attempt(['email'=>request('email'), 'password'=>request('password')])){
    		$user = Auth::user();
    		$success['token'] = $user->createToken('findfer')->accessToken;
    		return response()->json(['success'=>$success],$this->successStaus);
    	}
    	return response()->json(['error'=>'Unauthorised'],401);
    }

    public function create(Request $request){
    	$validator = Validator::make($request->all(),[
    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required',
    		'c_password'=>'required|same:password',
    		]);
    	if($validator->fails()){
    		return response()->json(['error'=>$validator->erros()],401);
    	}
    	$input = $request->all();$input['password'] = bcrypt($input['password']);
    	$user = User::create($input);
    	$success['token'] = $user->createToken('findfer')->accessToken;
    	$success['name'] = $user->name;
    	return response()->json(['success'=>$success], $this->successStaus);
    }

    function details(){
    	$user = Auth::user();
    	return response()->json(['success'=>$user],$this->successStaus);
    }
}
