<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Army extends Model
{
    //table
    protected $table = 'armies';
    protected $primaryKey = 'army_id';
	
	//fk
    public function generals()
    {
        return $this->belongsTo('App\Person','legatus');
    } 

    public function tribunes()
    {
        return $this->belongsTo('App\Person','tribunus');
    } 

    public function quartermasters()
    {
        return $this->belongsTo('App\Person','quaestor');
    } 

    public function locations()
    {
        return $this->belongsTo('App\Town','location');
    } 
}
