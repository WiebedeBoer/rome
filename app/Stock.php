<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //table
    protected $table = 'stocks';
    protected $primaryKey = 'stock_id';
	
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
