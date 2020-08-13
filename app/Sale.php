<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //table
    protected $table = 'sales';
    protected $primaryKey = 'sale_id';
	
    //fk
    public function tradegoods()
    {
        return $this->belongsTo('App\Goodtype','tradegoods');
    }     

    public function villas()
    {
        return $this->belongsTo('App\Villa','villa');
    } 
}
