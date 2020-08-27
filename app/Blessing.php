<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blessing extends Model
{
    //table
    protected $table = 'blessings';
    protected $primaryKey = 'blessing_id';
	
	//fk
    public function locations()
    {
        return $this->belongsTo('App\Town','location');
    } 
}
