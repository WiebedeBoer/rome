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
use App\Architecture;
use App\Religion;
use App\Region;
use App\Town;
use App\Landconnection;
use App\Sea;
use App\Seaconnection;
use App\Road;
use App\Milestone;
use App\Army;
use App\Capital;
use App\Building;

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
        
        /*
        maptile coordinates

        -10.8105,12.5117,68.2031,58.6998
        */
        
        $towns = Town::all();	 
        //return view
        return view('towns.index', compact('towns'));	   
    }
	
	//show view
    public function show($id)
    {       
        $towns = Town::where('town_id', $id)->firstOrFail();
        
        //land movement
        //region
        $region = $towns->region;
        //same region towns
        $sameregion = Region::where('region_id', $region)->firstOrFail();

        $sametowns_count = Town::where('region', $region)->where('town_id', '!=', $id)->count();
        if($sametowns_count >=1){
            $sametowns = Town::where('region', $region)->where('town_id', '!=', $id)->orderBy('town_name', 'asc')->get();
        }
        else {
            $sametowns =[];
        }
        

        //other region towns
        $connections_count = Landconnection::where('from', $region)->count();
        if($connections_count >=1){
            $connections = Landconnection::where('from', $region)->get();
            foreach($connections as $connection)
            {
                $toes = $connection->to;
                $otherregion = Region::where('region_id', $toes)->firstOrFail();
                $connection->otherregion = $otherregion->region_name;
                $othertowns = Town::where('region', $toes)->orderBy('town_name', 'asc')->get();
                $connection->othertowns = $othertowns;                     
            }   
        }
        else {
            $connections =[];
        }

        //sea movement
        //sea
        $sea = $towns->sea;
        //sea check
        $sea_check = is_null($sea);
        if($sea_check !=1){
            //same sea towns
            $samesea = Sea::where('sea_id', $sea)->firstOrFail();

            $sameseatowns_count = Town::where('sea', $sea)->where('town_id', '!=', $id)->count();
            if($sameseatowns_count >=1){
                $sameseatowns = Town::where('sea', $sea)->where('town_id', '!=', $id)->orderBy('town_name', 'asc')->get();
            }
            else {
                $sameseatowns =[];
            }
            //other sea towns
            $seaconnections_count = Seaconnection::where('from', $sea)->count();
            if($seaconnections_count >=1){
                $seaconnections = Seaconnection::where('from', $sea)->get();
                foreach($seaconnections as $seaconnection)
                {
                    $seatoes = $seaconnection->to;
                    $othersea = Sea::where('sea_id', $seatoes)->firstOrFail();
                    $seaconnection->othersea = $othersea->sea_name;
                    $otherseatowns = Town::where('sea', $seatoes)->orderBy('town_name', 'asc')->get();
                    $seaconnection->otherseatowns = $otherseatowns;                     
                }   
            }
            else {
                $seaconnections =[];
            }

        }
        else {
            $samesea ="none";
            $sameseatowns_count =0;
            $sameseatowns =[];
            $seaconnections_count =0;
            $seaconnections =[];
        } 

		//return
        return view('towns.show', compact('towns',
        'sametowns_count','sameregion','sametowns','connections_count','connections',
        'sameseatowns_count','samesea','sameseatowns','seaconnections_count','seaconnections'));	
    }
	
	//edit form
    public function edit($id)
    {       
        $towns = Town::where('town_id', $id)->firstOrFail();
        
        //land movement
        //region
        $region = $towns->region;
        //same region towns
        $sameregion = Region::where('region_id', $region)->firstOrFail();

        $sametowns_count = Town::where('region', $region)->where('town_id', '!=', $id)->count();
        if($sametowns_count >=1){
            $sametowns = Town::where('region', $region)->where('town_id', '!=', $id)->orderBy('town_name', 'asc')->get();
        }
        else {
            $sametowns =[];
        }
        

        //other region towns
        $connections_count = Landconnection::where('from', $region)->count();
        if($connections_count >=1){
            $connections = Landconnection::where('from', $region)->get();
            foreach($connections as $connection)
            {
                $toes = $connection->to;
                $otherregion = Region::where('region_id', $toes)->firstOrFail();
                $connection->otherregion = $otherregion->region_name;
                $othertowns = Town::where('region', $toes)->orderBy('town_name', 'asc')->get();
                $connection->othertowns = $othertowns;                     
            }   
        }
        else {
            $connections =[];
        }

        //sea movement
        //sea
        $sea = $towns->sea;
        //sea check
        $sea_check = is_null($sea);
        if($sea_check !=1){
            //same sea towns
            $samesea = Sea::where('sea_id', $sea)->firstOrFail();

            $sameseatowns_count = Town::where('sea', $sea)->where('town_id', '!=', $id)->count();
            if($sameseatowns_count >=1){
                $sameseatowns = Town::where('sea', $sea)->where('town_id', '!=', $id)->orderBy('town_name', 'asc')->get();
            }
            else {
                $sameseatowns =[];
            }
            //other sea towns
            $seaconnections_count = Seaconnection::where('from', $sea)->count();
            if($seaconnections_count >=1){
                $seaconnections = Seaconnection::where('from', $sea)->get();
                foreach($seaconnections as $seaconnection)
                {
                    $seatoes = $seaconnection->to;
                    $othersea = Sea::where('sea_id', $seatoes)->firstOrFail();
                    $seaconnection->othersea = $othersea->sea_name;
                    $otherseatowns = Town::where('sea', $seatoes)->orderBy('town_name', 'asc')->get();
                    $seaconnection->otherseatowns = $otherseatowns;                     
                }   
            }
            else {
                $seaconnections =[];
            }

        }
        else {
            $samesea ="none";
            $sameseatowns_count =0;
            $sameseatowns =[];
            $seaconnections_count =0;
            $seaconnections =[];
        } 
		//return
        return view('towns.edit', compact('towns',
        'sametowns_count','sameregion','sametowns','connections_count','connections',
        'sameseatowns_count','samesea','sameseatowns','seaconnections_count','seaconnections'));
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
            //treasury count
            $town->treasury_count = Building::where('location', $town->town_id)->where('buildingtype',11)->count();
        }       

        //return view
        return view('towns.mapculture', compact('towns'));	   
    }

	//map view
    public function maparchitecture()
    {            
        $towns = Town::all();
        
        //collect the region and culture
        foreach($towns as $town)
        {
            $town_region = $town->region;
            $region = Region::where('region_id', $town_region)->get();
            $town_architecture = $region[0]->architecture; //architecture id
            $architecture = Architecture::where('architecture_id', $town_architecture)->get();
            $town->architecture_name = $architecture[0]->architecture_name; //architecture name
        }       

        //return view
        return view('towns.maparchitecture', compact('towns'));	   
    }

	//map view
    public function maproad()
    {            
        //towns
        $towns = Town::all();
        foreach($towns as $town)
        {
            $town->milestone_count = Milestone::where('town', $town->town_id)->count();
        }

        //roads
        $roads = Road::all();
        foreach($roads as $road)
        {
            $road->via = $road->road_id;
            $road->milestone_count = Milestone::with('towns')->where('road', $road->via)->count();
            if ($road->milestone_count >=1){
                $road->milestones = Milestone::with('towns')->where('road', $road->via)->get();
                foreach($road->milestones as $milestone)
                {
                    $milestone->marker = $milestone->milestone;
                    $milestone->xco = $milestone->towns->xcoord;
                    $milestone->yco = $milestone->towns->ycoord;
                    
                    if($milestone->marker > 1 && $milestone->marker <= $road->milestone_count){
                        $milestone_section = $milestone->milestone - 1;
                        $prevmarker = Milestone::with('towns')->where('road', $road->via)->where('milestone', $milestone_section)->get();
                        $milestone->xpre = $prevmarker[0]->towns->xcoord;
                        $milestone->ypre = $prevmarker[0]->towns->ycoord;
                    }
                    else {                  
                        $milestone->section = 0;
                        $milestone->xpre = 0;
                        $milestone->ypre = 0;
                    }     
                } 
            }
 
        }       
        
        //return view
        return view('towns.maproad', compact('towns','roads'));	   
    }

	//map view
    public function maparmy()
    {            
        //towns
        $towns = Town::all();
        foreach($towns as $town)
        {
            $town->legion_count = Army::where('location', $town->town_id)->count();
        }     
        
        //return view
        return view('towns.maparmy', compact('towns'));	   
    }

	//map view
    public function mapclimate()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapclimate', compact('towns'));	   
    }

    //maps buildings
    //map view
    public function maptemple()
    {            
        $towns = Town::all();
        
        //collect the realm and culture
        foreach($towns as $town)
        {
            $town_realm = $town->realm;
            $realm = Realm::where('realm_id', $town_realm)->get();
            $town_culture = $realm[0]->culture; //culture id
            $culture = Culture::where('culture_id', $town_culture)->get();
            $town_religion = $culture[0]->culture_religion; //religion id
            $religion = Religion::where('religion_id', $town_religion)->get();

        } 
        
        //building count	
        foreach($towns as $town)
        {
            //temple counts
            /*
            $town->god_state_count = Building::where('location', $town->town_id)->where('buildingtype',1)->count(); 
            $town->god_agriculture_count = Building::where('location', $town->town_id)->where('buildingtype',2)->count(); 
            $town->god_war_count = Building::where('location', $town->town_id)->where('buildingtype',3)->count(); 
            $town->god_love_count = Building::where('location', $town->town_id)->where('buildingtype',4)->count(); 
            $town->god_commerce_count = Building::where('location', $town->town_id)->where('buildingtype',5)->count(); 
            $town->god_arts_count = Building::where('location', $town->town_id)->where('buildingtype',6)->count(); 
            $town->god_sea_count = Building::where('location', $town->town_id)->where('buildingtype',7)->count(); 
            $town->god_healing_count = Building::where('location', $town->town_id)->where('buildingtype',8)->count();
            $town->god_hunting_count = Building::where('location', $town->town_id)->where('buildingtype',9)->count();
            */
            $town->temple_count = Building::where('location', $town->town_id)->whereBetween('buildingtype',[1,9])->count();

            /*
            $town_realm = $town->realm;
            $realm = Realm::where('realm_id', $town_realm)->get();
            $town_culture = $realm[0]->culture; //culture id
            $culture = Culture::where('culture_id', $town_culture)->get();
            $town_religion = $culture[0]->culture_religion; //religion id
            $religion = Religion::where('religion_id', $town_religion)->get();
            $town->god_state = $religion[0]->state;
            $town->god_agriculture = $religion[0]->agriculture;
            $town->god_war = $religion[0]->war;
            $town->god_love = $religion[0]->love;
            $town->god_commerce = $religion[0]->commerce;
            $town->god_arts = $religion[0]->arts;
            $town->god_sea = $religion[0]->sea;
            $town->god_healing = $religion[0]->healing;
            $town->god_hunting = $religion[0]->hunting;            
            */

            //oracle count
            $town->oracle_count = Building::where('location', $town->town_id)->where('buildingtype',10)->count();

        } 

        //return view
        return view('towns.maptemple', compact('towns'));	   
    }

    //map view
    public function mapbath()
    {            
        $towns = Town::all();
        //building count	
        foreach($towns as $town)
        {
            $town_realm = $town->realm;
            $town->building_count = Building::where('location', $town->town_id)->where('buildingtype',12)->count(); 
        }       
        //return view
        return view('towns.mapbath', compact('towns'));	   
    }

    //map view
    public function maplibrary()
    {            
        $towns = Town::all();
        //building count	
        foreach($towns as $town)
        {
            $town_realm = $town->realm;
            $town->building_count = Building::where('location', $town->town_id)->where('buildingtype',14)->count(); 
        } 	   
        //return view
        return view('towns.maplibrary', compact('towns'));	   
    }

    //map view
    public function maptheatre()
    {            
        $towns = Town::all();	
        //building count	
        foreach($towns as $town)
        {
            $town_realm = $town->realm;
            $town->building_count = Building::where('location', $town->town_id)->where('buildingtype',17)->count(); 
        }    
        //return view
        return view('towns.maptheatre', compact('towns'));	   
    }

    //map view
    public function mapamphitheatre()
    {            
        $towns = Town::all();
        //building count	
        foreach($towns as $town)
        {
            $town_realm = $town->realm;
            $town->building_count = Building::where('location', $town->town_id)->where('buildingtype',18)->count(); 
        } 	   
        //return view
        return view('towns.mapamphitheatre', compact('towns'));	   
    }

    //map view
    public function maprace()
    {            
        $towns = Town::all();
        //building count	
        foreach($towns as $town)
        {
            $town_realm = $town->realm;
            $town->building_count = Building::where('location', $town->town_id)->where('buildingtype',20)->count(); 
        } 	   
        //return view
        return view('towns.maprace', compact('towns'));	   
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
	
	//map view
    public function mapslave()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapslave', compact('towns'));	   
    }

    //maps towns stats
	//map view
    public function mapdefenses()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapdefenses', compact('towns'));	   
    }

	//map view
    public function mapjustice()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapjustice', compact('towns'));	   
    }

	//map view
    public function mapagriculture()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapagriculture', compact('towns'));	   
    }

	//map view
    public function mapcommerce()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.mapcommerce', compact('towns'));	   
    }
	
}