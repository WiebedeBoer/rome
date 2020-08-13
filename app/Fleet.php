<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    //table
    protected $table = 'armies';
    protected $primaryKey = 'army_id';
	
	//fk
    public function admirals()
    {
        return $this->belongsTo('App\Person','admiral');
    } 

    public function captains()
    {
        return $this->belongsTo('App\Person','captain');
    } 

    public function seas()
    {
        return $this->belongsTo('App\Sea','sea');
    } 

    public function locations()
    {
        return $this->belongsTo('App\Town','location');
    } 
}
