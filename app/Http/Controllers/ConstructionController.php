<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
//models
use App\Person;
use App\User;
use App\Realm;
use App\Town;
use App\Villa;
use App\Building;
use App\Construction;

class ConstructionController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	

	//main view
    public function index()
    {            
       return view('constructions.index');
    }
	
	//show view
    public function show($id)
    {       
        return view('constructions.show');
    }
	
	//edit form
    public function edit($id)
    {       
        return view('constructions.edit');     
    }
	
	//create form
    public function create()
    {       
        return view('constructions.create');  
    }
	
    //update function
    public function update(Request $request, $id)
    {
        return view('constructions.edit');
    }
	
    //store function
    public function store()
    {
        return view('constructions.index');
	}
	
    //delete function
    public function destroy($id)
    {
		return view('constructions.index');
    }
}
