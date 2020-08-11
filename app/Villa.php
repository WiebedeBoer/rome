<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    //table
    protected $table = 'villas';
    protected $primaryKey = 'villa_id';
	
	//fk
    public function towns()
    {
        return $this->belongsTo('App\Town','town');
    } 
	
    public function persons()
    {
        return $this->belongsTo('App\Person','owner');
    } 
}
