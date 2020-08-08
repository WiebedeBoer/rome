<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //table
    protected $table = 'people';
    protected $primaryKey = 'person_id';
	
	//fk
    public function owners()
    {
        return $this->belongsTo('App\User','owner');
    } 

    //statistics

    //skills

    //towns
    public function provinces()
    {
        return $this->hasMany('App\Province','province_id');
    }

    //towns
    public function capitals()
    {
        return $this->hasMany('App\Town','town_id');
    }

    //citizens
    public function citizens()
    {
        return $this->hasMany('App\Citizen','citizen_id');
    }

    //mayors
    public function mayors()
    {
        return $this->hasMany('App\Mayor','mayor_id');
    }

    //mayors
    public function rulers()
    {
        return $this->hasMany('App\Ruler','ruler_id');
    }

    //governors
    public function governors()
    {
        return $this->hasMany('App\Governor','governor_id');
    }

    //spouses
    public function husbands()
    {
        return $this->hasMany('App\Spouse','spouse_id');
    }

    public function wives()
    {
        return $this->hasMany('App\Spouse','spouse_id');
    }

    //armies
    public function generals()
    {
        return $this->hasMany('App\Army','army_id');
    }

    public function quartermasters()
    {
        return $this->hasMany('App\Army','army_id');
    }

}
