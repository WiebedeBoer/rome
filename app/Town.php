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

    public function rulers()
    {
        return $this->belongsTo('App\Person','ruler');
    } 

    //mayors
    public function mayors()
    {
        return $this->hasMany('App\Mayor','mayor_id');
    }
}
