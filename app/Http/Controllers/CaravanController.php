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
use App\Trade;
use App\Caravan;

class CaravanController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	

	//main view
    public function index()
    {            
       return view('caravan.index');
    }
	
	//show view
    public function show($id)
    {       
        return view('caravan.show');
    }
	
	//edit form
    public function edit($id)
    {       
        return view('caravan.edit');     
    }
	
	//create form
    public function create()
    {       
        return view('caravan.create');  
    }
	
    //update function
    public function update(Request $request, $id)
    {
        return view('caravan.edit');
    }
	
    //store function
    public function store()
    {
        return view('caravan.index');
	}
	
    //delete function
    public function destroy($id)
    {
		return view('caravan.index');
    }
}
