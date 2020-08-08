<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mayor extends Model
{
    //table
    protected $table = 'mayors';
    protected $primaryKey = 'mayor_id';
	
	//fk
    public function persons()
    {
        return $this->belongsTo('App\Person','person');
    } 

    public function towns()
    {
        return $this->belongsTo('App\Town','town');
    } 
}
