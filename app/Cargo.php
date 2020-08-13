<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //table
    protected $table = 'cargos';
    protected $primaryKey = 'cargo_id';
	
    //fk
    public function tradegoods()
    {
        return $this->belongsTo('App\Goodtype','tradegoods');
    }    

    public function caravans()
    {
        return $this->belongsTo('App\Caravan','caravan');
    } 
}
