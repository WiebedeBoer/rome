<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    //table
    protected $table = 'capitals';
    protected $primaryKey = 'capital_id';
	
	//fk
    public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    } 

    public function towns()
    {
        return $this->belongsTo('App\Town','town');
    }
}
