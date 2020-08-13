<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    //table
    protected $table = 'buildings';
    protected $primaryKey = 'building_id';
	
	//fk
    public function buildingtypes()
    {
        return $this->belongsTo('App\Buildingtype','buildingtype');
    } 

    public function locations()
    {
        return $this->belongsTo('App\Town','location');
    } 

    public function owners()
    {
        return $this->belongsTo('App\Person','owner');
    } 
}
