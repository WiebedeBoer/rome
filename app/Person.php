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

    //towns
    public function capitals()
    {
        return $this->hasMany('App\Town','town_id');
    }

    //provinces
    public function governors()
    {
        return $this->hasMany('App\Province','province_id');
    }

    //citizens
    public function citizens()
    {
        return $this->hasMany('App\Citizen','citizen_id');
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
