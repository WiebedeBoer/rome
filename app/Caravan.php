<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caravan extends Model
{
    //table
    protected $table = 'villas';
    protected $primaryKey = 'villa_id';
	
    //fk
    public function tradegoods()
    {
        return $this->belongsTo('App\Goodtype','tradegoods');
    }    

    public function towns()
    {
        return $this->belongsTo('App\Town','location');
    } 
	
    public function persons()
    {
        return $this->belongsTo('App\Person','person');
    } 

    //cargo
    public function cargos()
    {
        return $this->hasMany('App\Cargo','cargo_id');
    }
}
