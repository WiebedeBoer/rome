<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    //table
    protected $table = 'citizens';
    protected $primaryKey = 'citizen_id';
	
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
