<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	return view('Admin.index');
    }

    //Student start
    public function get_studentsummary()
    {
    	return view('Admin.studentsummary');
    }
    //Student end
	public function Get_new(){
		
	}
}
