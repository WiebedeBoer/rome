<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realm extends Model
{
    //table
    protected $table = 'realms';
    protected $primaryKey = 'realm_id';
	
	//fk
    public function cultures()
    {
        return $this->belongsTo('App\Culture','culture');
    } 

    //citizens
    public function citizens()
    {
        return $this->hasMany('App\Citizen','citizen_id');
    }

    //rulers
    public function rulers()
    {
        return $this->hasMany('App\Ruler','ruler_id');
    }

    //chronicles
    public function chronicles()
    {
        return $this->hasMany('App\Chronicle','chronicle_id');
    }

    //trades
    public function trades()
    {
        return $this->hasMany('App\Trade','trade_id');
    }

}
