<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    //table
    protected $table = 'towns';
    protected $primaryKey = 'town_id';
	
	//fk
    public function regions()
    {
        return $this->belongsTo('App\Region','region');
    } 
	
    public function provinces()
    {
        return $this->belongsTo('App\Province','province');
    } 

    public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    } 

    public function seas()
    {
        return $this->belongsTo('App\Sea','sea');
    } 

    //milestones
    public function milestones()
    {
        return $this->hasMany('App\Milestone','milestone_id');
    } 

    //mayors
    public function mayors()
    {
        return $this->hasMany('App\Mayor','mayor_id');
    }

    //chronicles
    public function chronicles()
    {
        return $this->hasMany('App\Chronicle','chronicle_id');
    }  

    //people locations
    public function locations()
    {
        return $this->hasMany('App\Person','person_id');
    }

    //villas
    public function villas()
    {
        return $this->hasMany('App\Villa','villa_id');
    }

}
