<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
//models
use App\Person;
use App\Culture;
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
	
	//maps towns
	//map view
    public function mappopulation()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mappopulation', compact('towns'));	   
    }

	//map view
    public function mapculture()
    {            
        $towns = Town::all();
        
        //collect the realm and culture
        foreach($towns as $town)
        {
            $town_realm = $town->realm;
            $realm_culture = Realm::where('realm_id', $town_realm)->get();
            $town->culture = $realm_culture[0]->culture; //culture id
            $town->faction = $realm_culture[0]->realm_name; //realm name
        }       

        //return view
        return view('towns.mapculture', compact('towns'));	   
    }

	//map view
    public function mapclimate()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapclimate', compact('towns'));	   
    }
    
    //maps food
	//map view
    public function mapstaples()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapstaples', compact('towns'));	   
    }

	//map view
    public function mapfruit()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapfruit', compact('towns'));	   
    }

	//map view
    public function mapgrapes()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapgrapes', compact('towns'));	   
    }

	//map view
    public function mapolives()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapolives', compact('towns'));	   
    }

	//map view
    public function maphoney()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.maphoney', compact('towns'));	   
    }

    //maps animals
	//map view
    public function mappack()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mappack', compact('towns'));	   
    }

	//map view
    public function mapcattle()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapcattle', compact('towns'));	   
    }

	//map view
    public function mapwool()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapwool', compact('towns'));	   
    }

	//map view
    public function mappig()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mappig', compact('towns'));	   
    }

	//map view
    public function mappoultry()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mappoultry', compact('towns'));	   
    }

	//map view
    public function maprabbit()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.maprabbit', compact('towns'));	   
    }

	//map view
    public function mapfish()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapfish', compact('towns'));	   
    }

	//map view
    public function mapgame()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapgame', compact('towns'));	   
    }

    //maps raw
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

	//map view
    public function mapmarble()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapmarble', compact('towns'));	   
    }

    //maps metals
	//map view
    public function maptin()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.maptin', compact('towns'));	   
    }

	//map view
    public function mapcopper()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapcopper', compact('towns'));	   
    }

	//map view
    public function mapiron()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapiron', compact('towns'));	   
    }

	//map view
    public function mapgold()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapgold', compact('towns'));	   
    }

	//map view
    public function mapsilver()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapsilver', compact('towns'));	   
    }

    //maps products
	//map view
    public function mapdye()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapdye', compact('towns'));	   
    }

	//map view
    public function mappapyrus()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mappapyrus', compact('towns'));	   
    }

	//map view
    public function mapglass()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapglass', compact('towns'));	   
    }
    
    //maps caravans
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
	

	
}