<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiplomacyController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	

	//main view
    public function index()
    {            
       return view('diplomacy.index');
    }
	
	//show view
    public function show($id)
    {       
        return view('diplomacy.show');
    }
	
	//edit form
    public function edit($id)
    {       
        return view('diplomacy.edit');     
    }
	
	//create form
    public function create()
    {       
        return view('diplomacy.create');  
    }
	
    //update function
    public function update(Request $request, $id)
    {
        return view('diplomacy.edit');
    }
	
    //store function
    public function store()
    {
        return view('diplomacy.index');
	}
	
    //delete function
    public function destroy($id)
    {
		return view('diplomacy.index');
    }
}
