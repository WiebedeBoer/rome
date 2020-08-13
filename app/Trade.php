<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    //table
    protected $table = 'trades';
    protected $primaryKey = 'trade_id';
	
    //fk
    public function tradegoods()
    {
        return $this->belongsTo('App\Goodtype','tradegoods');
    }     

    public function startpoints()
    {
        return $this->belongsTo('App\Town','startpoint');
    } 

    public function endpoints()
    {
        return $this->belongsTo('App\Town','endpoint');
    } 
	
}
