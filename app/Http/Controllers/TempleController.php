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
use App\Blessing;
use App\God;

class TempleController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	

	//main view
    public function index()
    {            
       return view('temples.index');
    }
	
	//show view
    public function show($id)
    {       
        return view('temples.show');
    }
	
	//edit form
    public function edit($id)
    {       
        return view('temples.edit');     
    }
	
	//create form
    public function create()
    {       
        return view('temples.create');  
    }
	
    //update function
    public function update(Request $request, $id)
    {
        return view('temples.edit');
    }
	
    //store function
    public function store()
    {
        return view('temples.index');
	}
	
    //delete function
    public function destroy($id)
    {
		return view('temples.index');
    }

    //blessing function
    private function blessings($id)
    {
        $temple = Building::where('town_id', $id)->whereBetween('buildingtype',[2,6])->firstOrFail();
        $god = God::where('god_id',$temple->god)->firstOrFail();

        //realm
        if($god->god_realm =="chthonic"){
            $blessingchthonic = new Blessing();  
            $blessingchthonic->blessing = "underworld";
            $blessingchthonic->god = $temple->god;
            $blessingchthonic->location = $id;
            $blessingchthonic->save();    
        }
        //state
        if($god->state =="judge"){
            $blessingjudge = new Blessing();  
            $blessingjudge->blessing = "justice";
            $blessingjudge->god = $temple->god;
            $blessingjudge->location = $id;
            $blessingjudge->save();    
        }
        //agriculture
        if($god->agriculture =="crops"){
            $blessingagriculture = new Blessing();  
            $blessingagriculture->blessing = "agriculture";
            $blessingagriculture->god = $temple->god;
            $blessingagriculture->location = $id;
            $blessingagriculture->save();    
        }
        //war
        if($god->war =="war"){
            $blessingwar = new Blessing();  
            $blessingwar->blessing = "war";
            $blessingwar->god = $temple->god;
            $blessingwar->location = $id;
            $blessingwar->save();    
        }
        //love
        if($god->love =="sex"){
            $blessinglove = new Blessing();  
            $blessinglove->blessing = "love";
            $blessinglove->god = $temple->god;
            $blessinglove->location = $id;
            $blessinglove->save();    
        }
        //commerce
        if($god->commerce =="prosperity"){
            $blessingcommerce = new Blessing();  
            $blessingcommerce->blessing = "commerce";
            $blessingcommerce->god = $temple->god;
            $blessingcommerce->location = $id;
            $blessingcommerce->save();    
        }
        //arts
        if($god->arts =="wisdom"){
            $blessingarts = new Blessing();  
            $blessingarts->blessing = "wisdom";
            $blessingarts->god = $temple->god;
            $blessingarts->location = $id;
            $blessingarts->save();    
        }
        //sea
        if($god->sea =="seas"){
            $blessingaqua = new Blessing();  
            $blessingaqua->blessing = "sea";
            $blessingaqua->god = $temple->god;
            $blessingaqua->location = $id;
            $blessingaqua->save();  

            $blessingquake = new Blessing();  
            $blessingquake->blessing = "earthquake";
            $blessingquake->god = $temple->god;
            $blessingquake->location = $id;
            $blessingquake->save();   
        }
        elseif($god->sea =="waters"){
            $blessingaqua = new Blessing();  
            $blessingaqua->blessing = "weather";
            $blessingaqua->god = $temple->god;
            $blessingaqua->location = $id;
            $blessingaqua->save();    
        }
        elseif($god->sea =="storm"){
            $blessingaqua = new Blessing();  
            $blessingaqua->blessing = "storm";
            $blessingaqua->god = $temple->god;
            $blessingaqua->location = $id;
            $blessingaqua->save();    
        }
        //healing
        if($god->healing =="medicine"){
            $blessingheal = new Blessing();  
            $blessingheal->blessing = "health";
            $blessingheal->god = $temple->god;
            $blessingheal->location = $id;
            $blessingheal->save();    
        }
        elseif($god->healing =="pestilence"){
            $blessingheal = new Blessing();  
            $blessingheal->blessing = "pestilence";
            $blessingheal->god = $temple->god;
            $blessingheal->location = $id;
            $blessingheal->save();    
        }
        //hunting
        if($god->hunting =="hunt"){
            $blessinghunt = new Blessing();  
            $blessinghunt->blessing = "hunt";
            $blessinghunt->god = $temple->god;
            $blessinghunt->location = $id;
            $blessinghunt->save();    
        }
	}
}
