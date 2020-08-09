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

class TownController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }

	//main view
    public function index()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.index', compact('towns'));	   
    }
	
	//show view
    public function show($id)
    {       
		$towns = Town::where('town_id', $id)->firstOrFail();
		//return
		return view('towns.show', compact('towns'));	
    }
	
	//edit form
    public function edit($id)
    {       
		$towns = Town::where('town_id', $id)->firstOrFail();
		//return
		return view('towns.edit', compact('towns'));
    }
		
    //update function
    public function update(Request $request, $id)
    {
		$towns = Town::where('town_id', $id)->firstOrFail();
		//return
		return view('towns.edit', compact('towns'));
    }
	
	//maps
	//map view
    public function mappopulation()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mappopulation', compact('towns'));	   
    }
	
	//map view
    public function mapstaples()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapstaples', compact('towns'));	   
    }
	
	//map view
    public function mapsilk()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapsilk', compact('towns'));	   
    }

	//map view
    public function mapspice()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapspice', compact('towns'));	   
    }

	//map view
    public function mapincense()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapincense', compact('towns'));	   
    }

	//map view
    public function mapivory()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapivory', compact('towns'));	   
    }
	
	//map view
    public function mappottery()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mappottery', compact('towns'));	   
    }

	//map view
    public function maptimber()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.maptimber', compact('towns'));	   
    }
	
}