<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
//models
use App\Person;
use App\Realm;
use App\Town;
use App\User;
use App\Citizen;
use App\Villa;
use App\Stock;
use App\Sale;

class WorkshopController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	

	//main view
    public function index()
    {            
       return view('workshops.index');
    }
	
	//show view
    public function show($id)
    {       
        return view('workshops.show');
    }
	
	//edit form
    public function edit($id)
    {       
        return view('workshops.edit');     
    }
	
	//create form
    public function create()
    {       
        return view('workshops.create');  
    }
	
    //update function
    public function update(Request $request, $id)
    {
        return view('workshops.edit');
    }
	
    //store function
    public function store()
    {
        return view('workshops.index');
	}
	
    //delete function
    public function destroy($id)
    {
		return view('workshops.index');
    }
}
