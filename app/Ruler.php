<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruler extends Model
{
    //table
    protected $table = 'rulers';
    protected $primaryKey = 'ruler_id';
	
	//fk
    public function persons()
    {
        return $this->belongsTo('App\Person','person');
    } 

    public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    } 
}
