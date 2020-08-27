<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slave extends Model
{
    //table
    protected $table = 'slaves';
    protected $primaryKey = 'slave_id';
	
	//fk
    public function persons()
    {
        return $this->belongsTo('App\Person','owner');
    } 

    public function locations()
    {
        return $this->belongsTo('App\Town','location');
    } 
}
