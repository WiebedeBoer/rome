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
use App\Capital;
use App\Citizen;

class RealmController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	

	//main view
    public function index()
    {            
       return view('realms.index');
    }
	
	//show view
    public function show($id)
    {       
        return view('realms.show');
    }
	
	//edit form
    public function edit($id)
    {       
        return view('realms.edit');     
    }
	
	//create form
    public function create()
    {       
        return view('realms.create');  
    }
	
    //update function
    public function update(Request $request, $id)
    {
        return view('realms.edit');
    }
	
    //store function
    public function store()
    {
        return view('realms.index');
	}
	
    //delete function
    public function destroy($id)
    {
		return view('realms.index');
    }
}
