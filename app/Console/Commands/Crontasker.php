<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Arr;

use App\Person;
use App\Town;
use App\Building;

class Crontasker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //cron task
        $this->updateturns();
        $this->updategenerations();
        $this->updatedisasters();
        $this->updatepopulation();
    }

    //update turns
    private function updateturns()
    {
        //update turns
        Person::update(array('pt' => '7','kt' => '7'));
    }

    //update generations
    private function updategenerations()
    {
        $currentyear = 280;
        $currentera = "BCE";
        $randomage = rand(60,100);
        //check era
        if ($currentera =="BCE"){
            $deathyear = $currentyear + $randomage;
            $birthyear = $currentyear + 20;
        }
        else {
            
            if ($deathyear >=$currentyear)
            {
                $deathyear = $currentyear - $randomage;
                $birthyear = $currentyear - 20;
            }
            else {
                $deathyear = $currentyear + $randomage;
                $birthyear = $currentyear + 20;
            }               
        }

        //count deaths
        $death_count = Person::where('birth', $deathyear)->where->count(); 
        if ($death_count >=1){
            $persons = Person::where('birth', $deathyear)->get(); 
            foreach($persons as $person)
            {
                $town_realm = $town->realm;
                $new_generation = $person->generation + 1;
                //update generation and birth year
                Person::where('id', $person->person_id)->update(array('birth' => $birthyear, 'era' => $currentera,'generation' => $new_generation));
            } 
        }
    }

    //update disasters
    private function updatedisasters()
    {


        $towns = Town::all();
	
        foreach($towns as $town)
        {
            $climate = $town->climate;
            $building_count = Building::where('location', $town->town_id)->where('buildingtype',36)->count();
            //create type 

            //normal default
            $disastertype ="normal";
            //plague

            //fire

            //earthquake

            //drought

            //flooding

            //volcano


            //update disasters
            Town::where('town_id',$town->town_id)->update(array('disaster' => $disastertype));

            //destroy building

            //destroy crops

        } 


    }

    //update disasters
    private function updatepopulation()
    {       
        $towns = Town::all();	
        foreach($towns as $town)
        {
            //old population
            $population = $town->population;
            //old disaster
            $disaster = $town->disaster;

            //building check
            $building_count = Building::where('location', $town->town_id)->where('buildingtype',36)->count(); 

            $raw_rate = 33; //between 8 to 33

            //create population
            if($disaster =="plague"){
                $disasterrate = $rawrate + 42;
                $growthrate = (1000 - $disasterrate) + $raw_rate;
            }
            elseif($disaster =="floods"){
                $disasterrate = $rawrate + 24;
                $growthrate = (1000 - $disasterrate) + $raw_rate;
            }
            elseif($disaster =="drought"){
                $disasterrate = $rawrate + 34;
                $growthrate = (1000 - $disasterrate) + $raw_rate;
            }
            elseif($disaster =="earthquake"){
                $disasterrate = $rawrate + 204;
                $growthrate = (1000 - $disasterrate) + $raw_rate;
            }
            elseif($disaster =="volcano"){
                $disasterrate = $rawrate + 150;
                $growthrate = (1000 - $disasterrate) + $raw_rate;
            }
            else {
                $growthrate = 1000 + $raw_rate;
            }
            
            $raw_population = round(($population / 1000) * $growthrate);
            //check if bigger than
            if ($raw_population <30){
                $new_population = 30;
            }
            else {
                $new_population = $raw_population;
            }
            Town::where('town_id',$town->town_id)->update(array('population' => $new_population));
        }        
    }


}
