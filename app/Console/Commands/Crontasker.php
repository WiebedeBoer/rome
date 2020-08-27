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
use App\Road;
use App\Milestone;
use App\Trade;

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
        $this->updatetowns();
    }

    //update turns
    private function updateturns()
    {        
        $currentyear = 280;
        $currentera = "BCE";
        //birth year
        $birthyear = $this->checkera($currentyear,$currentera);      
        //persons
        $persons = Person::all();
        foreach($persons as $person)
        {
            $deceased = $this->checkgenerations($currentyear,$currentera,$person->birth,$person->era);
            //update generation and birth year
            if($deceased =="dead"){                           
                $new_generation = $person->generation + 1;
                Person::where('person_id', $person->person_id)->update(array('birth' => $birthyear, 'era' => $currentera,'generation' => $new_generation, 'pt' => '7','kt' => '7'));
            }
            //update turns
            else {
                Person::where('person_id', $person->person_id)->update(array('pt' => '7','kt' => '7'));
            }                 
        } 
    }

    //update generations
    private function checkgenerations($current_year,$current_era,$birth_year,$birth_era)
    {
        //check era
        if ($current_era =="BCE" && $birth_era =="BCE"){
            $death_age = $birth_year - $current_year;
        }
        elseif ($current_era =="CE" && $birth_era =="BCE"){
            $death_age = $birth_year + $current_year;
        }
        elseif ($current_era =="CE" && $birth_era =="CE") {            
            $death_age = $current_year - $birth_year;
        }
        else {
            $death_age = 0;
        }

        //check age
        if($death_age >=100){
            $deceased ="dead";
        }
        elseif($death_age >60 && $death_age <100){
            //random age
            $random_age = rand(60,100);
            if ($random_age >$death_age){
                $deceased ="dead";
            }
            else {
                $deceased ="alive";
            }
        }
        else {
            $deceased ="alive";
        }

        return $deceased;

    }

    //check era
    private function checkera($currentyear,$currentera)
    {
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
        return $birthyear;
    }

    //update disasters
    private function updatetowns()
    {
        $currentyear = 280;
        $currentera = "BCE";

        $towns = Town::all();
	
        foreach($towns as $town)
        {
            $id = $town->town_id;
            $climate = $town->climate;
            $agriculture = $town->agriculture;
            $justice = $town->justice;

            //create type 
            $seismictype = $this->seismicdisaster($currentyear,$currentera,$id);
            if($seismictype =="normal"){
                $plaguetype = $this->plaguedisaster($currentyear,$currentera,$id);
                if($plaguetype =="normal"){
                    $weathertype = $this->weatherdisaster($climate,$agriculture);
                    if($weathertype =="normal"){
                        $disastertype = $this->firedisaster($justice);
                    }
                    else {
                        $disastertype = $weathertype;
                    }
                }
                else {
                    $disastertype = $plaguetype;
                }
            }
            else {
                $disastertype = $seismictype;
            }  
            //population
            $new_population = $this->calculatepopulation($disastertype,$id,$agriculture,$commerce,$town->population,$town->rebel);
            //agricultural decay   
            $new_agri = $this->agriculturedecay($disastertype,$agriculture);            
                     
            //destruction and decay
            if ($disastertype =="fire" || $disastertype =="earthquake" || $disastertype =="volcano"  || $disastertype =="avalanche"){
                //destroy buildings

                //update disasters 
                Town::where('town_id',$town->town_id)->update(array('population' => $new_population,'disaster' => $disastertype,'rebel_status' => 'rebellious'));
            }
            elseif($disastertype =="floods"){
                //destroy buildings

                //update disasters and destroy crops
                Town::where('town_id',$town->town_id)->update(array('population' => $new_population,'disaster' => $disastertype,'agriculture' => $new_agri,'rebel_status' => 'rebellious'));
            }          
            elseif($disastertype =="locusts"){
                //update disasters and destroy crops
                Town::where('town_id',$town->town_id)->update(array('population' => $new_population,'disaster' => $disastertype,'agriculture' => $new_agri,'rebel_status' => 'rebellious'));
            }
            elseif($disastertype =="drought" || $disastertype =="blizzard"){
                //destroy livestock

                //update disasters and destroy crops
                Town::where('town_id',$town->town_id)->update(array('population' => $new_population,'disaster' => $disastertype,'agriculture' => $new_agri,'rebel_status' => 'rebellious'));                
            }
            else {
                Town::where('town_id',$town->town_id)->update(array('population' => $new_population,'agriculture' => $new_agri,'rebel_status' => 'rebellious'));
            }

        }         

    }



    //earthquake or volcano disaster
    private function seismicdisaster($currentyear,$currentera,$id)
    {

        //rhodes earthquake
        if($currentyear ==226 && $currentera ="BCE" && $id ==307){
            $disastertype ="earthquake";
        }
        //portugal earthquake
        elseif($currentyear ==60 && $currentera ="BCE" && $id ==218){
            $disastertype ="earthquake";
        }
        elseif($currentyear ==60 && $currentera ="BCE" && $id ==220){
            $disastertype ="earthquake";
        }
        elseif($currentyear ==60 && $currentera ="BCE" && $id ==221){
            $disastertype ="earthquake";
        }
        elseif($currentyear ==60 && $currentera ="BCE" && $id ==224){
            $disastertype ="earthquake";
        }
        //lydia earthquake
        elseif($currentyear ==17 && $currentera ="CE" && $id ==405){
            $disastertype ="earthquake";
        }
        elseif($currentyear ==17 && $currentera ="CE" && $id ==406){
            $disastertype ="earthquake";
        }
        elseif($currentyear ==17 && $currentera ="CE" && $id ==407){
            $disastertype ="earthquake";
        }
        elseif($currentyear ==17 && $currentera ="CE" && $id ==408){
            $disastertype ="earthquake";
        }
        elseif($currentyear ==17 && $currentera ="CE" && $id ==409){
             $disastertype ="earthquake";
        }
        //antioch earthquake
        elseif($currentyear ==115 && $currentera ="CE" && $id ==551){
            $disastertype ="earthquake";
        }
        //syria earthquake
        elseif($currentyear ==363 && $currentera ="CE" && $id ==574){
            $disastertype ="earthquake";
        }
        elseif($currentyear ==363 && $currentera ="CE" && $id ==579){
            $disastertype ="earthquake";
        }
        //crete earthquake
        elseif($currentyear ==365 && $currentera ="CE" && $id ==304){
            $disastertype ="earthquake";
        }
        elseif($currentyear ==365 && $currentera ="CE" && $id ==305){
            $disastertype ="earthquake";
        }
        //vesuvius volcano
        elseif($currentyear ==79 && $currentera ="CE" && $id ==8){
            $disastertype ="volcano";
        }
        else {
            $disastertype ="normal";
        }
        return $disastertype;
    }

    //plague disaster
    private function plaguedisaster($currentyear,$currentera,$id)
    {

        //antonine plague
        if(($currentyear >=165 && $currentyear <181) && $currentera ="CE"){
            $random_plague = rand(1,100);
            $health_count = Building::where('location', $id)->whereBetween('buildingtype',[12,13])->count();
            if($health_count >=1){
                if ($random_plague >99){
                    $disastertype ="plague";
                }
                else {
                    $disastertype ="normal";
                }
            }
            else {
                if ($random_plague >96){
                    $disastertype ="plague";
                }
                else {
                    $disastertype ="normal";
                }
            }
        }
        //cyprian plague
        elseif(($currentyear >=249 && $currentyear <267) && $currentera ="CE"){
            $random_plague = rand(1,100);
            $health_count = Building::where('location', $id)->whereBetween('buildingtype',[12,13])->count();
            if($health_count >=1){
                if ($random_plague >99){
                    $disastertype ="plague";
                }
                else {
                    $disastertype ="normal";
                }
            }
            else {
                if ($random_plague >96){
                    $disastertype ="plague";
                }
                else {
                    $disastertype ="normal";
                }
            }
        }       
        else {
            $disastertype ="normal";
        }

        return $disastertype;
    }

    //weather disaster
    private function weatherdisaster($climate,$agriculture)
    {
 
        //weather randomness
        $random_weather = rand(1,1000);
        //weather chance
        if($agriculture <900){
            $check_agriculture = 900;
        }
        else {
            $check_agriculture = $agriculture;
        }
        //check disaster
        if ($random_weather >$check_agriculture){
            //random chance
            $flood_random = rand(1,10);
            //hot, dry 5, river 4 (9)
            if($climate =="hot desert wetland" || $climate =="hot continental wetland"){
                if($flood_random >=7){
                     $disastertype ="floods";
                }
                elseif($flood_random >=2 && $flood_random <7){
                    $disastertype ="drought";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //cold 3, dry 3, river 4 (10)
            if($climate =="cold desert wetland" || $climate =="cold steppe wetland"){
                if($flood_random >=7){
                    $disastertype ="floods";
                }
                elseif($flood_random >=4 && $flood_random <7){
                    $disastertype ="drought";
                }
                elseif($flood_random >=1 && $flood_random <4){
                    $disastertype ="blizzard";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //warm, wet 3, river 4 (7)
            elseif($climate =="mediterranean wetland" || $climate =="pontic wetland"){
                if($flood_random >=7){
                    $disastertype ="floods";
                }
                elseif($flood_random >=4 && $flood_random <7){
                    $disastertype ="drought";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //cold 1, wet 2, river 4 (7)
            elseif($climate =="maritime wetland" || $climate =="maritime rainforest"){
                if($flood_random >=7){
                    $disastertype ="floods";
                }
                elseif($flood_random >=5 && $flood_random <7){
                    $disastertype ="drought";
                }
                elseif($flood_random >=4 && $flood_random <5){
                    $disastertype ="blizzard";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //cold 4, wet 2, river 4 (10)
            elseif($climate =="warm continental wetland"){
                if($flood_random >=7){
                    $disastertype ="floods";
                }
                elseif($flood_random >=5 && $flood_random <7){
                    $disastertype ="drought";
                }
                elseif($flood_random >=1 && $flood_random <4){
                    $disastertype ="blizzard";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //hot, dry 5, land 3 (8)
            elseif($climate =="hot desert oasis" || $climate =="hot steppe"){
                if($flood_random >=6){
                    $disastertype ="drought";
                }
                elseif($flood_random >=3 && $flood_random <6){
                    $disastertype ="locusts";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //hot 2, dry 5, land (7)
            elseif($climate =="hot continental"){
                if($flood_random >=3 && $flood_random <8){
                    $disastertype ="drought";
                }
                elseif($flood_random >=1 && $flood_random <2){
                    $disastertype ="blizzard";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //cold 4, dry 4, land (8)
            elseif($climate =="cold desert oasis" || $climate =="cold steppe" || $climate =="warm continental"){
                if($flood_random >=7){
                    $disastertype ="drought";
                }
                elseif($flood_random >=3 && $flood_random <7){
                    $disastertype ="blizzard";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //cold 3, wet 3, land 1 (7)
            elseif($climate =="maritime"){
                if($flood_random ==10){
                    $disastertype ="floods";
                }
                elseif($flood_random >=7 && $flood_random <10){
                    $disastertype ="drought";
                }
                elseif($flood_random >=4 && $flood_random <7){
                    $disastertype ="blizzard";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //warm, wet 4, land 3 (7)
            elseif($climate =="pontic" || $climate =="mediterranean"){
                if($flood_random >=8){
                    $disastertype ="floods";
                }
                elseif($flood_random >=4 && $flood_random <8){
                    $disastertype ="drought";
                }
                else {
                    $disastertype ="normal";
                }
            }
            //(alpine) cold 5, dry 2, land ()
            else{
                if($flood_random >=9){
                    $disastertype ="avalanche";
                }
                elseif($flood_random >=4 && $flood_random <9){
                    $disastertype ="blizzard";
                }
                else {
                    $disastertype ="normal";
                }
            }
        }
        else {
            $disastertype ="normal";
        }
        return $disastertype;
    }

    //fire disaster
    private function firedisaster($justice)
    {
        //fire chance
        if($justice >=900){
            $check_justice = 1000;
        }
        elseif($justice >=700 && $justice <900){
            $check_justice = 950;
        }
        else {
            $check_justice = 900;
        }
        //fire randomness
        $random_justice = rand(1,1000);
        //create fire
        if($random_justice >$check_justice){
            $disastertype ="fire";
        }
        else {
            $disastertype ="normal";
        }
        return $disastertype;
    }

    //agriculture decay
    private function agriculturedecay($disaster,$agriculture){

        if($disaster){
            //agriculture decay
            $randcrop = rand(5,20);

        }
        else{
            $randcrop = rand(20,50);
        }
        $raw_agri = $agriculture - $rand_crop;
        if ($raw_agri <1){
            $new_agri =1;
        }
        else {
            $new_agri = $raw_agri;
        }

        return $new_agri;
    }

    //update rebellion
    private function rebelstatus($justice)
    {
        //justice chance
        if($justice >=900){
            $check_justice = 1000;
        }
        elseif($justice >=700 && $justice <900){
            $check_justice = 900;
        }
        else {
            $check_justice = $justice + 100;
        }
        //justice randomness
        $random_justice = rand(1,1000);
        //update
        if($random_justice >$check_justice){
            $new_status ="rebellious";  
        }
        else{
            $new_status ="loyal";
        }         
        return $new_status;
    }

    //update disasters
    private function calculatepopulation($disaster,$id,$agriculture,$commerce,$population,$rebel)
    {       
        //base rate
        $base_rate = 24; 
        //health bonus
        $health_count = Building::where('location', $id)->whereBetween('buildingtype',[12,13])->count();
        if($health_count >=1){
            $health_bonus = 12;
        }
        else {
            $health_bonus = 0;
        }
        //commerce bonus
        $commerce_bonus = ceil(($commerce - 50) / 40); //max 24
        //agriculture bonus
        $agriculture_bonus = ceil(($agriculture - 50) / 25); //max 38
        //decay
        if($population >=250000 && $population <1000000){
            $decay_rate = $base_rate;
        }
        elseif($population >=1000000 && $population <2000000){
            $decay_rate = $base_rate + $health_bonus;
        }
        elseif($population >=2000000){
            $decay_rate = $base_rate + $health_bonus + $agriculture_bonus;
        }
        else {
            $decay_rate = 0;
        }

        //between 24 to 98
        $raw_rate = $base_rate + $health_bonus + $commerce_bonus + $agriculture_bonus - $decay_rate;

        //plague
        if($disaster =="plague"){
            $disasterrate = 42 - $health_bonus;
            $growthrate = 1000 - $disasterrate;
        }
        //famine
        elseif($disaster =="floods"){
            $disasterrate = 24;
            $growthrate = 1000 - $disasterrate;
        }
        elseif($disaster =="drought"){
            $disasterrate = 34;
            $growthrate = 1000 - $disasterrate;
        }
        elseif($disaster =="locusts"){
            $disasterrate = 34;
            $growthrate = 1000 - $disasterrate;
        }
        elseif($disaster =="blizzard"){
            $disasterrate = 17;
            $growthrate = 1000 - $disasterrate;
        }
        //destruction
        elseif($disaster =="fire"){
            $disasterrate = 21;
            $growthrate = 1000 - $disasterrate;
        }
        //seismic
        elseif($disaster =="earthquake"){
            $disasterrate = 204;
            $growthrate = 1000 - $disasterrate;
        }
        elseif($disaster =="volcano"){
            $disasterrate = 150;
            $growthrate = 1000 - $disasterrate;
        }
        //default normal
        else {
            //check rebel status
            if($rebel =="loyal"){
                $growthrate = 1000 + $raw_rate;
            }
            else {
                $growthrate = 1000;
            }                
        }

        //create population
        $raw_population = round(($population / 1000) * $growthrate);
        //check if bigger than
        if ($raw_population <30){
            $new_population = 30;
        }
        else {
            $new_population = $raw_population;
        }
        return $new_population;
          
    } 

}
