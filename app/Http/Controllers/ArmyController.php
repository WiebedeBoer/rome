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
use App\Army;

class ArmyController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	

	//main view
    public function index()
    {            
       return view('armies.index');
    }
	
	//show view
    public function show($id)
    {       
        return view('armies.show');
    }
	
	//edit form
    public function edit($id)
    {       
        return view('armies.edit');
    }
	
	//create form
    public function create()
    {       
        return view('armies.create');
    }
	
    //update function
    public function update(Request $request, $id)
    {
        return view('armies.edit');
    }
	
    //store function
    public function store()
    {
		return view('armies.index');	
	}
	
    //delete function
    public function destroy($id)
    {
		return view('armies.index');
    }
}
