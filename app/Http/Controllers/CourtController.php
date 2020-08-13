<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourtController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	

	//main view
    public function index()
    {            
       return view('court.index');
    }
	
	//show view
    public function show($id)
    {       
        return view('court.show');
    }
	
	//edit form
    public function edit($id)
    {       
        return view('court.edit');     
    }
		
    //update function
    public function update(Request $request, $id)
    {
        return view('court.edit');
    }	

}
