<?php

namespace findfer\Http\Controllers\Admin;

use Illuminate\Http\Request;
use findfer\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
    	return view('admin.home');
    }
}
