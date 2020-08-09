<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualController extends Controller
{
	//manual main
    public function index()
    {       
        return view('manual.index');        
    }
	
}
