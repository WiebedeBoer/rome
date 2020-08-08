<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    //table
    protected $table = 'mayors';
    protected $primaryKey = 'mayor_id';
	
	//fk
    public function governors()
    {
        return $this->belongsTo('App\Governor','governor');
    } 

    public function towns()
    {
        return $this->belongsTo('App\Town','town');
    }
}
