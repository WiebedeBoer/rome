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

    //sales
    public function sales()
    {
        return $this->hasMany('App\Sale','sale_id');
    }

    //constructions
    public function constructions()
    {
        return $this->hasMany('App\Construction','construction_id');
    }
    
}
