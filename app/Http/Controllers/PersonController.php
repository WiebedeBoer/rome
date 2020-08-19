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
use App\Skill;
use App\Villa;

class PersonController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	

	//main view
    public function index()
    {            
        $persons = Person::all();
        return view('persons.index', compact('persons'));    
    }
	
	//show view
    public function show($id)
    {       
        $user = auth()->user();
		$user_audio = $user->audio;
		return view('persons.show', compact('user_audio'));	     
    }
	
	//edit form
    public function edit($id)
    {       
        $person = Person::where('person_id', $id)->firstOrFail();  
        return view('persons.edit', compact('person'));	 
    }
	
	//create form
    public function create()
    {       
        $towns = Town::all();
        return view('persons.create', compact('towns'));   
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $user_id = $user->id;	
        $character = Person::where('owner', $user_id)->get();
        $person_id = $character->person_id;

        if($person_id ==$id){
            $data = $request->validate([
                'bio' => 'nullable'      
            ]);
            Person::where('app_status_id',$id)->update($data);
        }

        return redirect('/persons/edit/'.$id)->with('message', 'Altered');     
        
 
    }
	
    //store function
    public function store()
    {        
    
        $data = request()->validate([
            'person_name' => 'required|min:2',
            'gender' => 'required',

            'adm' => 'required|integer',
            'arc' => 'required|integer',
            'art' => 'required|integer',
            'bal' => 'required|integer',
            'car' => 'required|integer',
            'eng' => 'required|integer',
            'far' => 'required|integer',
            'her' => 'required|integer',
            'lit' => 'required|integer',
            'mac' => 'required|integer',
            'mas' => 'required|integer',
            'med' => 'required|integer',
            'nav' => 'required|integer',
            'phi' => 'required|integer',
            'poe' => 'required|integer',

            'villa' => 'nullable',
            'town' => 'required|integer'
        ]);  
        
        $gender = request('gender');
        if ($gender =="male" || $gender =="female"){

            $adm = request('adm'); 
            $arc = request('arc'); 
            $art = request('art'); 
            $bal = request('bal'); 
            $car = request('car');
            $eng = request('eng'); 
            $far = request('far'); 
            $her = request('her'); 
            $lit = request('lit'); 
            $mac = request('mac'); 
            $mas = request('mas'); 
            $med = request('med'); 
            $nav = request('nav'); 
            $phi = request('phi'); 
            $poe = request('poe');  
            $total = $adm + $arc + $art + $bal + $car + $eng + $far + $her + $lit + $mac + $mas + $med + $nav + $phi + $poe;

            if ($total >30){
                return redirect('/persons/create')->with('message', 'Too many points allocated');
            }
            elseif ($total <30){
                return redirect('/persons/create')->with('message', 'Insufficient points allocated');
            }
            else{
                $person = new Person();       
                $person->person_name = request('person_name');
                $person->gender = request('gender'); 
                $person->save();
        
                $user = auth()->user();
                $user_id = $user->id;	
                $character = Person::where('owner', $user_id)->get();
                $person_id = $character->person_id;
        
                $skill = new Skill();
                $skill->person = $person_id;
                $skill->adm = request('adm'); 
                $skill->arc = request('arc'); 
                $skill->art = request('art'); 
                $skill->bal = request('bal'); 
                $skill->car = request('car');
                $skill->eng = request('eng'); 
                $skill->far = request('far'); 
                $skill->her = request('her'); 
                $skill->lit = request('lit'); 
                $skill->mac = request('mac'); 
                $skill->mas = request('mas'); 
                $skill->med = request('med'); 
                $skill->nav = request('nav'); 
                $skill->phi = request('phi'); 
                $skill->poe = request('poe'); 
                $skill->save();
        
                $villa = new Villa();
                $villa->villa_name = request('villa');
                $villa->owner = $person_id;
                $villa->town = request('town');  
                $villa->save();
        
                return view('/home')->with('message', 'Successfully registered your character'); 
            }

        }
        else {
            return redirect('/persons/create')->with('message', 'Gender must be one of the available options');
        }

	}
	
    //delete function
    public function destroy($id)
    {
        $user = auth()->user();
        $user_admin = $user->admin;	
        if($user_admin ==1){
            $person = Person::findOrFail($id);
            $person->delete();
            return redirect('/persons')->with('message', 'Successfully removed');
        }
        else {
            return redirect('/persons')->with('message', 'Not allowed');
        }         
    }

}
